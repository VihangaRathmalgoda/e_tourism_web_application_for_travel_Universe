<?php session_start();?>
<?php require_once('conn.php');?>
<?php
// if(!isset($_SESSION['adminid'])){
//     header('Location:main.php');
// }
$customer_list='';
if(isset($_POST['check'])){
    $clist=mysqli_real_escape_string($conp,$_POST['customer']);
//SQL get customer details query

if($clist=='pending'){
$query="SELECT c.*,ca.* FROM customer as c, customer_approve as ca WHERE c.id=ca.cid AND ca.status=0 ORDER BY c.name";
$tablename='Request Tourists List';
}elseif($clist=='all'){
    $query="SELECT c.*,ca.* FROM customer as c, customer_approve as ca WHERE c.id=ca.cid AND ca.status=1 ORDER BY c.name";
    $tablename='Accept Tourists List';
}else{
    $query="SELECT c.*,ca.* FROM customer as c, customer_approve as ca WHERE c.id=ca.cid AND ca.status=2 ORDER BY c.name";
    $tablename='Reject Tourists List';
}
$customer=mysqli_query($conp,$query);

//fill customer details to table

if($customer){
    while($customer1=mysqli_fetch_assoc($customer)){

        $cId=$customer1['cid'];
        $userID=$_SESSION['adminid'];
      
        $customer_list.="<tr>";
        $customer_list.="<td>{$customer1['name']}</td>";
        $customer_list.="<td>{$customer1['email']}</td>";
        $customer_list.="<td>{$customer1['contactNO']}</td>";
        $customer_list.="<td>{$customer1['emerCNO']}</td>";
        $customer_list.="<td><a href=\"view_customer.php?id={$customer1['cid']}\" target='_blank'><button class='btn btn-info btn-sm' style='width: 80px;' >View</button></a></td>";
        if($customer1['status']==0){
        $customer_list.="<td><a href=\"accept_customer.php?id={$customer1['cid']}\"><button class='btn btn-success btn-sm'>Activate</button></a></td>";
        $customer_list.="<td><a href=\"delete_customer.php?id={$customer1['cid']}\"><button class='btn btn-danger btn-sm'>Deactivate</button></a></td>";
        }
        else{
            $customer_list.="<td><a href=\"#?id={$customer1['cid']}\"><button class='btn btn-success btn-sm' disabled>Activate</button></a></td>";
        $customer_list.="<td><a href=\"#?id={$customer1['cid']}\"><button class='btn btn-danger btn-sm' disabled>Deactivate</button></a></td>";
        }
        if($customer1['status']==0){
        $customer_list.="<td><a href=\"#?id={$customer1['cid']}\"><button class='btn btn-primary btn-sm' disabled>Edit</button></a></td>";
        $customer_list.="</tr>";
        }
        elseif($customer1['status']==1){
            $customer_list.="<td><a href=\"modify-admindashboard.php?id={$customer1['cid']}\"><button class='btn btn-primary btn-sm' >Edit</button></a></td>";
            $customer_list.="</tr>";
        }else{
            $customer_list.="<td><a href=\"#?id={$customer1['cid']}\"><button class='btn btn-primary btn-sm' disabled>Edit</button></a></td>";
            $customer_list.="</tr>";
        }
         
    }
 }
 else{
    echo "Database query failed";
 }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cssStyle1.css" />
    <title>customer dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">TRAVEL UNIVERSE</div>
            <div class="list-group list-group-flush my-3">
                <a onclick="location.href='admindashboard.php'" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                        
                        <?php if($_SESSION['empType']=="0"){ ?>
                           <!-- <button name="customer" class="select" onclick="location.href='customerdashboard.php'">----customer----</button>-->
                           <a onclick="location.href='staffdashboard.php'" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Staff</a>
                        <?php } ?>

                <a onclick="location.href='servicesdashboard.php'" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Services</a>
                <a onclick="location.href='providersdashboard.php'" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Providers</a>
                <a onclick="location.href='packagesdashboard.php'" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Packages</a>
                <a onclick="location.href='bookingdashboard.php'" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Booking</a>
                <a onclick="location.href='Location.php'" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>Hotels</a>


                <a onclick="location.href='responceinquary.php'" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote-fill" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm7.194 2.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 4C4.776 4 4 4.746 4 5.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 7.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 4c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
                    </svg>Inquary</a>
            </div>
        </div>
        <!-- sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Customer</h2>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2" ></i>Hi, <?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                   

                    <div class="col-md-8" >
                            <div>
                             <!--dropdown menu-->
                            <form action="" method="POST">  
                            <div class="form-group col-md-3">
                             <select id="inputState" name="customer" class="form-control" >
                            <option value="pending">Request Customers</option>
                             <option value="all">Accept Customers</option>
                             <option value="reject">Reject Customers</option>
                            </select>
        </br>
            </div>

           <!--check booking type button -->
        <div class="col-md-10" >               
                <div>
                <button type="submit" name="check" class="btn btn-warning">  Check  </button>
                </div>                     
        </div>
    </form>
                            </div>
                    </div>

                <!-- table -->

                <div class="row my-5">
                    <?php
                   echo "<h3>$tablename</h3>";
                    ?>
                    <!-- <h3 class="fs-4 mb-3">Recent Tourists</h3> -->
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" >Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Emg NO</th>
                                    <th scope="col">Agreement</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Deactivate</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <?php echo $customer_list; ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

   
    
</body>

</html>





