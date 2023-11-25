<?php require_once('conn.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>foreigner register</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <style>
    /* Style to change the width and height of the select element */
    #country {
      width: 190px;
      /* Set the desired width */
      height: 40px;
      /* Set the desired height */
    }
  </style>
</head>

<body>
  <!-- Section Design Block -->
  <section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: url('img/lanka1.jpg');

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
            <span style="color: hsl(218, 81%, 75%)">Plan your dream tour</span>
          </h1>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="" method="POST" id="regi" enctype="multipart/form-data">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <!-- passport number -->
                <div class="form-outline mb-4">
                  <input type="text" id="passportInput" class="form-control" name="passportnumber" />
                  <label class="form-label" for="form3Example3">Passport number</label>
                  <label id="validationResult"></label>
                </div>

                <!-- name -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control" name="name" required />
                  <label class="form-label" for="form3Example3">Name</label>
                </div>

                <div class="row">

                  <!-- country -->
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <select id="country" name="country" class="form-control">
                        <option value="">Select</option>
                      </select>
                      <!-- <input type="text" id="country" class="form-control" name="country" required /> -->
                      <label class="form-label" for="form3Example2">Country</label>
                    </div>
                  </div>

                  <!--  language -->
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <select id="language" name="language" class="form-control">
                        <option value="">Select</option>
                      </select>

                      <!-- <input type="text" id="form3Example1" class="form-control" name="language" required /> -->
                      <label class="form-label" for="form3Example1">Language</label>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <!-- contact number -->
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="telephoneInput" class="form-control" name="cnumber" maxlength="" minlength="" required />
                      <label class="form-label" for="form3Example2">Contact</label>
                      <label id="validationResult1"></label>
                    </div>
                  </div>

                  <!-- imer contact number -->
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="telephoneInput1" class="form-control" name="icnumber" maxlength="" minlength="" required />
                      <label class="form-label" for="form3Example1">Emergency contact</label>
                      <label id="validationResult3"></label>
                    </div>
                  </div>

                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="emailInput" class="form-control" name="email" required />
                  <label class="form-label" for="form3Example3">Email</label>
                  <label id="validationResult2"></label>
                </div>

                <div class="row">
                  <!-- Password input -->
                  <div class="col-md-6 mb-4">
                    <input type="password" id="password" class="form-control" name="password" minlength="6" maxlength="6" oninput="checkPasswordMatch()" required />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>

                  <!--confirm Password input -->
                  <div class="col-md-6 mb-4">
                    <input type="password" id="cpassword" class="form-control" name="cpassword" minlength="6" maxlength="6" oninput="checkPasswordMatch()" required />
                    <label class="form-label" for="form3Example4">Confirm password</label>
                  </div>
                  <span id="message"></span>
                </div>

                <!--file input -->
                <div class="form-outline mb-4">
                  <div class="input-box">
                    <input type="file" id="customFile" name="file" class="form-control" placeholder="upload as jpg" required />
                    <label class="form-label" for="form3Example4">Harmless Letter (upload as jpg)</label>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" name="login" id="login" class="btn btn-primary btn-block mb-4" style="background-color: #0000FF" ;>
                  Sign up
                </button>

            </div>
          </div>
          </form>
          <!--match password-->
          <script>
            function checkPasswordMatch() {
              var password = document.getElementById('password').value;
              var confirmPassword = document.getElementById('cpassword').value;
              var message = document.getElementById('message');
              var submitButton = document.getElementById('login');


              if (password === confirmPassword) {
                message.innerHTML = 'Passwords match';
                message.style.color = 'green';
                submitButton.disabled = false;
                submitButton.style.color = 'white';
              } else {
                message.innerHTML = 'Passwords do not match';
                message.style.color = 'red';
                submitButton.disabled = true;
                submitButton.style.color = 'red';
              }
            }
          </script>
          <!-- match passport number -->
          <script>
            function validatePassportNumber(passportNumber) {

              var passportRegex = /^[A-Z0-9]{6,20}$/;
              return passportRegex.test(passportNumber);
            }

            document.getElementById("passportInput").addEventListener("input", function() {
              var userInput = document.getElementById("passportInput").value;
              var validationResultLabel = document.getElementById("validationResult");

              if (validatePassportNumber(userInput)) {
                validationResultLabel.textContent = "Passport number is valid!";
                validationResultLabel.style.color = "green";
              } else {
                validationResultLabel.textContent = "Invalid passport number format!";
                validationResultLabel.style.color = "red";
              }
            });
          </script>
          <!-- match contact number -->
          <script>
            function validateTelephoneNumber(telephoneNumber) {
              var telephoneRegex = /^\+?[0-9\- ]{6,}$/;              
              return telephoneRegex.test(telephoneNumber);
            }

            document.getElementById("telephoneInput").addEventListener("input", function() {
              var userInput = document.getElementById("telephoneInput").value;
              var validationResultLabel = document.getElementById("validationResult1");

              if (validateTelephoneNumber(userInput)) {
                validationResultLabel.textContent = "Telephone number is valid!";
                validationResultLabel.style.color = "green";
              } else {
                validationResultLabel.textContent = "Invalid telephone number format!";
                validationResultLabel.style.color = "red";
              }
            });
          </script>

          <!-- match emg contact number -->
          <script>
            function validateTelephoneNumber(telephoneNumber) {
              var telephoneRegex = /^\+?[0-9\- ]{6,}$/;              
              return telephoneRegex.test(telephoneNumber);
            }

            document.getElementById("telephoneInput1").addEventListener("input", function() {
              var userInput = document.getElementById("telephoneInput").value;
              var validationResultLabel = document.getElementById("validationResult3");

              if (validateTelephoneNumber(userInput)) {
                validationResultLabel.textContent = "Telephone number is valid!";
                validationResultLabel.style.color = "green";
              } else {
                validationResultLabel.textContent = "Invalid telephone number format!";
                validationResultLabel.style.color = "red";
              }
            });
          </script>
          <!-- match email address -->
          <script>
            function validateEmailAddress(emailAddress) {
              var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
              return emailRegex.test(emailAddress);
            }

            document.getElementById("emailInput").addEventListener("input", function() {
              var userInput = document.getElementById("emailInput").value;
              var validationResultLabel = document.getElementById("validationResult2");

              if (validateEmailAddress(userInput)) {
                validationResultLabel.textContent = "Email address is valid!";
                validationResultLabel.style.color = "green";
              } else {
                validationResultLabel.textContent = "Invalid email address format!";
                validationResultLabel.style.color = "red";
              }
            });
          </script>
          <!-- country API -->
          <?php include 'includes/countryAPI.php'; ?>

          <!-- language API -->
          <?php include 'includes/languageAPI.php'; ?>
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

  $customerID = mysqli_real_escape_string($conp, $_POST['passportnumber']);
  $userName = mysqli_real_escape_string($conp, $_POST['name']);
  $password = mysqli_real_escape_string($conp, $_POST['password']);
  $cEmail = mysqli_real_escape_string($conp, $_POST['email']);
  $country = mysqli_real_escape_string($conp, $_POST['country']);
  $language = mysqli_real_escape_string($conp, $_POST['language']);
  $cNumber = mysqli_real_escape_string($conp, $_POST['cnumber']);
  $icNumber = mysqli_real_escape_string($conp, $_POST['icnumber']);
  // $letter = mysqli_real_escape_string($conp, $_POST['file']);
  $hashed_password = sha1($password);
  //Insert letter Image
  // ----------------
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 5000000) {
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = 'uploads/' . $fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
      } else {
        echo "Your file is too big!";
      }
    } else {
      echo " There was an error uploading your file!";
    }
  } else {
    echo "You cannot upload files of this type!";
  }



  $sqlin = "INSERT INTO customer(id,name,country,language,email,contactNO,emerCNO,password,harmlessLe)
        VALUES
        ('$customerID','$userName','$country','$language','$cEmail','$icNumber','$cNumber','$hashed_password','$fileNameNew')";
  $sqlin1 = "INSERT INTO customer_approve(cid,status) VALUES ('$customerID','0')";
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