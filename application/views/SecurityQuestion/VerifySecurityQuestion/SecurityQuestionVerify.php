

       
          <div class="centered-box">
              
              
              
              
              <form class="box-items" id="loginForm" action="<?php echo base_url();?>VerifySecurityQuestion/VerifySecurityQuestion" method="post">
                <div class="form-group">
  
                  <h2 class="mb-">Input your Security questions.</h2>
                  
                  <?php if (strlen($status) > 0): echo '<div class="alert alert-danger">' . $status . '</div>'; endif?>

                  <div class="form-group"><label for="exampleInputEmail1">What is your father's family name?</label>
                <input type="text" name="questions1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="What is your father's family name?" required>  </div>

                <div class="form-group"><label for="exampleInputEmail1">What is your mother's family name?</label>
                <input type="text" name="questions2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="What is your mother's family name?" required></div>
                <div class="form-group"><label for="exampleInputEmail1">What is your hometown?</label>
                <input type="text" name="questions3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="What is your hometown?" required></div>

                  
                <small id="emailHelp" class="form-text text-muted">You can use these security questions to change your password.</small>
                <div class="form-group"><button type="submit" class="btn btn-success btn-box">Submit</button></div>
              </form>
          
              
          </div>                  
      </div>
      </div>
        
      
