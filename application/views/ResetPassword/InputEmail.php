

       
          <div class="centered-box">
              
              
              
              
              <form class="box-items" id="loginForm" action="<?php echo base_url();?>ResetPassword/SendEmail" method="post">
                <div class="form-group">
  
                  <h2 class="mb-">Input your new password.</h2>
                  
                  <?php if (strlen($status) > 0): echo '<div class="alert alert-danger">' . $status . '</div>'; endif?>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>

                  
                <small id="emailHelp" class="form-text text-muted">The length of your new password is between 6-20.</small>
                <div class="form-group"><button type="submit" class="btn btn-success btn-box">Submit</button></div>
              </form>
          
              
          </div>                  
      </div>
      </div>
        
      
