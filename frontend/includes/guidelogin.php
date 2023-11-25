<?php require_once('../conn.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tour Guide register</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
  <!-- Section Design Block -->
  <section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: url('../img/tourist.jpg');

      }

      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparent">
      <div class="container">
        <div class="sidebar-heading text-center py-2 primary-text fs-4 fw-bold text-uppercase border-bottom" style="color:#FF577F; text:bold"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-through-heart-fill" viewBox="0 0 16 20">
            </svg></i></i>
          <a href="front_home.php" style="color:transparent">
            <h4 style="color:#000000">Travel Universe</h4>
        </div></a>
      </div>
    </nav>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: #d1ac5d">
            Travel Universe <br />
            <span style="color:#461105 ">DO YOUR BEST</span>
          </h1>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="" method="POST" id="regi" enctype="multipart/form-data">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <!-- passport number -->
                <div class="form-outline mb-4">
                  <input type="text" id="NICInput" class="form-control" name="nic" />
                  <label class="form-label" for="form3Example3">NIC number</label>
                  <label id="validationResult"></label>
                </div>


                <div class="row">
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" minlength="6" maxlength="6" oninput="checkPasswordMatch()" required />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>


                <!-- Submit button -->
                <button type="submit" name="login" id="login" class="btn btn-primary btn-block mb-4" style="background-color: #0000FF" ;>
                  Sign up
                </button>
                <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button onclick="window.location.href='../guide_registration.php'" class="btn btn-light btn-lg">Create new</button>
                  </div>

            </div>
          </div>
          </form>
         
          <!-- match nic number -->
          <script>
            function validatePassportNumber(nic) {

              var nicRegex = /^\d{9}[VvXx]$|^\d{10}[VvXx]$/;
              return nicRegex.test(nic);
            }

            document.getElementById("NICInput").addEventListener("input", function() {
              var userInput = document.getElementById("NICInput").value;
              var validationResultLabel = document.getElementById("validationResult");

              if (validatePassportNumber(userInput)) {
                validationResultLabel.textContent = "NIC number is valid!";
                validationResultLabel.style.color = "green";
              } else {
                validationResultLabel.textContent = "Invalid NIC number format!";
                validationResultLabel.style.color = "red";
              }
            });
          </script>
         
          
          
        </div>
      </div>
    </div>
    </div>
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

<?php
//get input data

if (isset($_POST['login'])) {
  include "conn.php";

  $customerID = mysqli_real_escape_string($conp, $_POST['nic']);
  $password = mysqli_real_escape_string($conp, $_POST['password']);
  $hashed_password = sha1($password);
 
  //check the DB
  $select = mysqli_query($conp, "SELECT * FROM customer WHERE id = '$customerID'");
  if (mysqli_num_rows($select) > 0) {
    echo "<script> 
            alert('This Passport Number is already used!');
            </script>";
  } else {
    //if (preg_match('/^[A-PR-WY][1-9]\d\s?\d{4}[1-9]$/',$customerID)) {

    if (mysqli_query($conp, $sqlin)) {
      if (mysqli_query($conp, $sqlin1)) {
        echo "<script>
          alert('Account request has Created Successfully');
          </script>";
        echo "<script>
          window.location.href='front_home.php#foreign_login'</script>";

        //     echo "<script>
        //     $(document).ready(function () {
        //         $('#foreign_login').modal('show');
        //     });
        // </script>";
      } else {
        echo "<script>
              alert('Account request has NOT Created Successfully');
              </script>";
      }
    } else {
      echo "<script>
            alert('Account request has NOT Created Successfully');
            </script>";
    }
    //} else {
    //echo "<script>alert('Enter the valid Passport Number')</script>";
    //}
  }
}
?>