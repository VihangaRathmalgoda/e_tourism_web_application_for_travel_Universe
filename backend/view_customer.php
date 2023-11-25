<?php session_start();?>
<?php require_once('conn.php');?>

<?php
// if(!isset($_SESSION['adminid'])){
//     header('Location:main.php');
// }

$id=$_GET['id'];
$id=mysqli_real_escape_string($conp,($_GET['id']));

$query="SELECT * FROM customer WHERE id='{$id}' LIMIT 1";

    $result_set=mysqli_query($conp,$query);
    if($result_set){

        if(mysqli_num_rows($result_set)==1){
            //found record
           
            $result=mysqli_fetch_assoc($result_set);
            
            $image=$result['harmlessLe'];
            // echo "$image";

        }
        else{
            //Not found record
            header(('Location:customerdashboard.php? err=Not_found'));

        }
    }
    else{
        //unsuccessfull query
        header(('Location:customerdashboard.php? err=query_faild'));
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view customer evidence</title>
    <link rel="stylesheet" href="styleStf.css" />
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
<div class="input-box">
          <h3></h3>
          <img src='<?php echo "../frontend/uploads/".$image ?>' style="width: 800px; height: 700px;"  class="img-thumbnail">
        </div>
        <div class="input-box">
        <!-- <a href="customerdashboard.php"><button type="button" name="submit" class="btn btn-info">Back</button> </a> -->
        <a href="javascript:void(0);" onclick="window.close();"><button type="button" name="submit" class="btn btn-info">Close</button></a>

        </div>


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