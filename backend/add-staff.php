<?php session_start();?>
<?php require_once('conn.php');?>

<?php

if(!isset($_SESSION['adminid'])){
  header('Location:main.php');
}

        $errors=array();
        if(isset($_POST['submit'])){

 //preview required feild
            $req_fields=array('nic','staffname','staffpassword','staffemail','cnumber','staff_type');

                foreach($req_fields as $field){

                if(empty(trim($_POST[$field]))){
                    $errors[]=
                    "<div class='alert alert-danger' role='alert'>
                    $field. is Required
                  </div>";
                }
            

            }
//check database in Duplicate NIC
            $staffnic=mysqli_real_escape_string($conp,$_POST['nic']);
            $query="SELECT * FROM staff WHERE id='{$staffnic}' LIMIT 1";
            
            $result_set=mysqli_query($conp,$query);
            if($result_set){
                if(mysqli_num_rows($result_set)==1){

                    $errors[]=  '<div class="alert alert-danger" role="alert">
                    NIC number already Exists !
                  </div>';
                }
            }
  //check database in Duplicate Email

  $staffemail = mysqli_real_escape_string($conp, $_POST['staffemail']);
  $query1 = "SELECT * FROM staff WHERE email='{$staffemail}' LIMIT 1";

  $result_set = mysqli_query($conp, $query1);
  if ($result_set) {
    if (mysqli_num_rows($result_set) == 1) {

      $errors[] =  '<div class="alert alert-danger" role="alert">
            Email Address already Exists !
           </div>';
    }
  }
//chek required feild
            if(empty($errors)){

              $staffnic=mysqli_real_escape_string($conp,$_POST['nic']);
                $staffname=mysqli_real_escape_string($conp,$_POST['staffname']);
                $staffemail=mysqli_real_escape_string($conp,$_POST['staffemail']);
                $staffpassword=mysqli_real_escape_string($conp,$_POST['staffpassword']);
                $staffcontact=mysqli_real_escape_string($conp,$_POST['cnumber']);
                $stafftype=mysqli_real_escape_string($conp,$_POST['staff_type']);
               
                if($stafftype==1){
                  $jobtype='Manager';
                 
              }else{
                  $jobtype='Accountant'; 
              }


//send mail input    
                $toAdress = $_POST['staffemail'];
                $subject = 'Inform About Your Job Acceptence';
                $body = 'Hello '.$staffname.'. We are happy to inform you that you have been contacted as an employee of Travel Universe.
                Your online account username, job type and password are given below. After receiving a notification email again,
                We will inform you to log into the account through that details</br><p><b>Username:</b></p>'.$staffemail.'</br><p><b>Password:</b></p>'.$staffpassword.'</br><p><b>Job Type:</b></p>'.$jobtype.'</br><p><b>Link: http://127.0.0.1/php/Travel%20Universe%20Company/backend/main.php</b></p></br><h3>Thank You</h3>';
                $Name = $_POST['staffname'];

                $hashed_password=sha1($staffpassword);
//SQL Insert query
                $query="INSERT INTO staff (";
                $query.="id,name,email,contactNO,password,isavailable,staff_type_id";
                $query.=")VALUES(";
                $query.="'$staffnic','$staffname','$staffemail','$staffcontact','$hashed_password','1','$stafftype'";	
                $query.=")";

                $result=mysqli_query($conp,$query);
                if($result){

                    header('Location:staffdashboard.php?staff_added=true');
                    include 'Mail1.php';

                }
                else{
                    $errors[]='<div class="alert alert-danger" role="alert">
                    Record was not saved !
                  </div>';
                }
            }

        }
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>staff add form</title>
    <!--- CSS File--->
      
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/admin.css" />
  <link rel="stylesheet" href="cusCss.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styleStf.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
    
  </head>
  <body>
    <section class="container">
      <header>Add new member</header>

<!-- preview form error -->
      <?php
            if(!empty($errors)){
                echo '<div class="errmsg">';
                echo '<div class="alert alert-danger" role="alert">
                There were errors on your form !
              </div>';
               
                
                foreach($errors as $error){
                    echo $error.'</br>';
                }
                echo '</div>';
                
            }

            
        ?>


      <form action="add-staff.php" method="POST" class="form" class="staffform">
       
      <div class="input-box">
          <label>NIC Number</label>
          <input type="text" placeholder="Enter NIC number" id="nic" name="nic" maxlength="12" minlength="10" />
          <div class="error"></div>
        </div>

      <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" id="staffname" name="staffname" />
          <div class="error"></div>
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="email" placeholder="Enter email address" id="staffemail" name="staffemail"  />
          <div class="error"></div>
        </div>

        <div class="input-box">
          <label>Contact Number</label>
          <input type="cnumber" placeholder="Enter contact number" id="cnumber" name="cnumber" maxlength="10"   />
          <div class="error"></div>
        </div>

        <div class="input-box">
          <label>Password</label>
          <input type="Password" placeholder="Enter Password (You must use 6 to 8 charactors)" name="staffpassword" id="staffpassword" maxlength="8" minlength="6"  />
          <div class="error"></div>
        </div>

        <div class="input-box">
        <label>Staff Type<br></label>
        <br>
        <div class="form-group col-md-3">
                    <select id="inputState" name="staff_type" class="form-control">
                    <option >-----------select-----------</option>
                    <option value="2">Accountant</option>
                    <option value="1">Manager</option>
                    </select>
        </br>
            </div>
            <div class="error"></div>
            </div>
      <!-- form submit button -->
        <button class='btn btn-info btn-sm' name="submit" id="submit">Save</button>
       
        <!--back button -->
       <a href="staffdashboard.php"><button type="button" name="submit" class="btn btn-info">Back</button> </a>


      </form>
    </section>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>