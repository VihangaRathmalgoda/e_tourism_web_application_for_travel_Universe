<div class="modal fade" tabindex=-1 role="dialog" id="foreign_login">
        <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
            <div class="modal-content" style="background-image: url('img/clog.jpg'); background-size: cover;">
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