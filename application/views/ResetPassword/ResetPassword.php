

       
          <div class="centered-box">
              
              
              
              
              <form class="box-items" id="loginForm" action="<?php echo base_url();?>ResetPassword/ResetPassword" method="post">
                <div class="form-group">
  
                  <h2 class="mb-">Input your new password.</h2>
                  
                  <?php if (strlen($status) > 0): echo '<div class="alert alert-danger">' . $status . '</div>'; endif?>

                  <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="newpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                  
                <small id="emailHelp" class="form-text text-muted">The length of your new password is between 6-20.</small>
                <div class="form-group"><button type="submit" class="btn btn-success btn-box">Submit</button></div>
              </form>
          
              
          </div>                  
      </div>
      </div>
        
      
