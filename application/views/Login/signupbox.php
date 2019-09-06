<?php if (!isset($_SESSION["email"])): ?>

       
          <div class="centered-box">
              
              <button type="button" class="btn btn-primary box-items btn-box"><i class="fab fa-facebook-square"></i>Sign up with Facebook</button>
              
              
              <form class="box-items" id="loginForm" action="<?php echo base_url();?>Signup/signup" method="post">
                <div class="form-group">
  
                  <h2 class="mb-">Please sign up</h2>
                  <?php if (strlen($status) > 0): echo '<div class="alert alert-danger">' . $status . '</div>'; endif?>
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <div class="form-group"><button type="submit" class="btn btn-success btn-box">Sign up</button></div>
              </form>
          
              
          </div>                  
      </div>
      
        <?php else: ?>
            <p class="text-center">Welcome!</p>
        <?php endif ?>
      
