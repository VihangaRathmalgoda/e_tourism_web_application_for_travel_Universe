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
                </div>
            </div>
        </div>
    </div>