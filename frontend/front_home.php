<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front_Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  </head>

<body>
  <!-- header -->
<?php include 'includes/heade.php';?>
   
        <section id="location">
        <div class="container mt-3">

<div class="row">
    <div class="col-12">
        <!--//normal button-->
        <h1 class="text-center">BEAUTY OF CEYLON</h1>
        <p class="text-center lead">Lets go...!</p>
    </div>
    <div class="col-12 col-sm-12 col-md-12  col-lg-12 col-xl-12 d-flex  flex-row-reverse">
        <a href="" class="btn btn-outline-success" role="button">Join with US</a>
         <a href="" class="btn btn-outline-primary" role="button" data-toggle="modal" data-target="#foreign_login">Travel with US</a>    
    </div>
<hr>
<!-- carousel -->

<?php include 'includes/carousel.php';?>
<hr>
<div class="row">
    <div class="col-12 col-sm-6 col-md-4  col-lg-4 col-xl-2">
        <p class="lead text-center">Kandy</p>
        <img src="img/Kandy.jpg" class="mx-auto d-block img-fluid " alt="">
        <p class="text-center">Kandy is a large city in central Sri Lanka. It's set on a plateau
            surrounded by mountains, which are home to tea plantations.</p>
    </div><!--//kandy-->

    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
        <p class="lead text-center">Ella</p>
        <img src="img/ella.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="text-center">Ella is a small town in the Badulla District
            of Uva Province, Sri Lanka governed by an Urban Council.
            It is approximately 200 kilometres.</p>
    </div><!--//ella-->

    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
        <p class="lead text-center">Sigiriya</p>
        <img src="img/sigiriya.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="text-center">One of the most striking features of Sigiriya is
            its Mirror wall. In the old days, it was polished so thoroughly
            that the king could see his.</p>
    </div><!--//sigiriya-->

    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
        <p class="lead text-center">Galle</p>
        <img src="img/galle.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="text-center">Galle is a city on the southwest coast of Sri Lanka.
            It’s known for Galle Fort, the fortified old city founded by Portuguese
            colonists in the 16th century.</p>
    </div><!--//galle-->

    <div class="col-12  col-sm-6 col-md-4 col-lg-4 col-xl-2">
        <p class="lead text-center">Jaffna</p>
        <img src="img/Jaffna.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="text-center">Jaffna is a city on the northern tip of Sri Lanka.
            Nallur Kandaswamy is a huge Hindu temple with golden arches and an ornate
            gopuram tower.</p>
    </div><!--//jaffna-->

    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
        <p class="lead text-center">Nuwaraeliya</p>
        <img src="img/Nuwara.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="text-center">Nuwara Eliya is a city in the tea country hills 
            of central Sri Lanka. The naturally landscaped Hakgala Botanical Gardens 
            displays roses and tree ferns,</p>
    </div><!--//nuwaraeliya-->
</div> <!--//row-->
</div><!--//container-->
        </section>
        <hr>
        <DIV class="container mt-3">
        <section id="aboutus">
            <div class="row">
                <div class="col-12">
                    <h1 class="lead text-center">AboutUS</h1>
                    <p class="text-center">
                    By breaking the country into smaller, more manageable areas,
                    the site aims to create a virtual travel experience that allows 
                    the user to explore the sights of Brazil right from their computer.
                    This can help visitors decide where they want to go within this massive 
                    country. If they’re looking for a relaxed beach trip, for example, they’ll 
                    have very different options from travelers looking for hiking trips or 
                    adventure tours. 
                    </p>
                </div>
            </div>
        </section>
        </DIV>
        
<!--footer-->
<?php include 'includes/foot.php';?>


<!--foreign login modal-->
<div class="modal fade" tabindex=-1 role="dialog" id="foreign_login">
        <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" area-label="close">
                        <span area-hidden="true">&times;</span>
                    </button>
                </div> <!--header-->
                <div class="modal-body">
                <form action="login.php" method="post">    
            
              <!-- Customer ID input -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control" name="customerID"  placeholder="Enter the passport number" required />
                <label class="form-label" for="form3Example3">Passport Number</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control"  minlength="6" maxlength="6" name="customerPassword"  placeholder="Enter your Password" required/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>
              

              <!-- login button -->
               <button type="submit"  name="submit"  class="btn btn-danger btn-lg" style="background-color:#FF577F">Login</button>
              <!-- create new account button -->
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button onclick="window.location.href='foreign_registration.php'" class="btn btn-light btn-lg">Create new</button>
                  </div>
              </div>
            </form>
                </div><!--body-->
            </div>
        </div>
    </div>

    <!--foreign inquery modal-->
<div class="modal fade" tabindex=-1 role="dialog" id="foreign_inquery">
        <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Inquery</h5>
                    <button type="button" class="close" data-dismiss="modal" area-label="close">
                        <span area-hidden="true">&times;</span>
                    </button>
                </div> <!--header-->
                <div class="modal-body">
                <form action="inquary.php" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control"  name="name" required />
                  <label class="form-label" for="form3Example1">Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" name="cnumber" maxlength="10" minlength="10" required/>
                  <label class="form-label" for="form3Example2">Contact</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control" name="email" required/>
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example4" class="form-control"  name="massage" required/>
              <label class="form-label" for="form3Example4">Message</label>
            </div>

          

            <!-- Submit button -->
            <button type="submit" class="btn btn-danger btn-block mb-5"  name="send"  style="background-color:#0000FF">
                  Send
                </button>


            
          </form>
                </div><!--body-->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
                <script src="js/bootstrap.min.js"></script>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>