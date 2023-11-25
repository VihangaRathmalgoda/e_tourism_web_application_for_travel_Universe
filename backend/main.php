<?php session_start(); ?>
<?php require_once('conn.php'); ?>

<?php
if (isset($_POST['submit'])) {
  //check errors
  $errors = array();
  if (!isset($_POST['id']) || strlen(trim(($_POST['id']))) < 1) {
    $errors[] = 'Username IS Misssing or Invalid';
  }
  if (!isset($_POST['password']) || strlen(trim(($_POST['password']))) < 1) {
    $errors[] = 'Password IS Misssing or Invalid';
  }
  if (empty($errors)) {
    $id = mysqli_real_escape_string($conp, $_POST['id']);
    // $password=mysqli_real_escape_string($conp,$_POST['password']);
    $empTypeName = mysqli_real_escape_string($conp, $_POST['empType']);
    $password = mysqli_real_escape_string($conp, sha1($_POST['password']));
    //check employee type
    $empType = 0;
    if ($empTypeName == 'Manager') {
      $empType = 1;
    } elseif ($empTypeName == 'Admin') {
      $empType = 0;
    } else {
      $empType = 2;
    }
    // check database
    $query = "SELECT * FROM staff
        where id='{$id}'
        AND password='{$password}'
        AND isavailable='1'
        AND staff_type_id='{$empType}'
        limit 1";

    $results_set = mysqli_query($conp, $query);

    if ($results_set) {
      if (mysqli_num_rows($results_set) == 1) {
        //create session
        $admin = mysqli_fetch_assoc($results_set);
        $_SESSION['adminid'] = $admin['id'];
        $_SESSION['username'] = $admin['name'];
        $_SESSION['empType'] = $admin['staff_type_id'];

        if ($empType == 0) {

          echo "<Script>alert('hi')</Script>";
          header('Location:admindashboard.php');
        } else {
          header('Location:admindashboard.php');
        }
      } else {
        $errors = 'Invalid Username, Password or Type';
      }
    } else {
      $errors = 'database Query Failed';
    }
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login-admin/staff</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <section class="vh-100" style="background-color: #F4F4F4;">
    <div class="container py-5 h-100 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-5 col-lg-5 d-none d-md-block ">
                <img src="img/backlogin.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="main.php" method="post">

                    <?php
                    //Show alert message
                    if (isset($errors) && !empty($errors)) {

                      echo '<div class="alert alert-danger" role="alert">
                Invalid user name or password !
              </div>';
                    }

                    ?>
                    <?php
                    //logout
                    if (isset($_GET['logout'])) {
                      echo '<div class="alert alert-danger" role="alert">
          You have successfully Log Out from the system !
        </div>';
                    }
                    ?>

                      <!-- input fileds  -->
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0" style="color:#dd8d74">Travel Universe</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Loging your account</h5>


                    <div class="form-outline mb-4">
                      <input type="text" name="id" class="form-control form-control-lg" required />
                      <label class="form-label">User name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" name="password" maxlength="60" class="form-control form-control-lg" required />
                      <label class="form-label">Password</label>
                    </div>

                    <fieldset class="row mb-3">
                      <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="empType" value="Admin" checked>
                          <label class="form-check-label" for="gridRadios1">
                            Admin </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="empType" id="gridRadios2" value="Manager">
                          <label class="form-check-label" for="gridRadios2">
                            Manager</label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="empType" id="gridRadios2" value="Accountant">
                          <label class="form-check-label" for="gridRadios2">
                            Accountant</label>
                        </div>
                      </div>
                    </fieldset>


                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button type="submit" class="btn btn-warning" name="submit">Login</button>
                    </div>


                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
<?php mysqli_close($conp); ?>