<?php

use LDAP\Result;

 session_start();?>
<?php require_once('conn.php');?>

<?php

        $errors=array();

$idno="";
        
if(isset($_GET['id'])){
    //get the user info
    $userID=$_SESSION['adminid'];
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conp,($_GET['id']));

    //update customer status
    $query="UPDATE customer_approve SET status=2, sid='{$userID}',cid='{$id}' WHERE cid='{$id}' LIMIT 1";
    

    $result=mysqli_query($conp,$query);

    if($result){
        //Record was deleted
        header('Location:customerdashboard.php? member_deleted');
    }
    else{
        header('Location:customerdashboard.php? Not_deleted');

    }

}
else{
    header('Location:admindashboard.php');
}

?>

