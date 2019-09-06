<?php if (isset($_SESSION["email"])): ?>

      
      
       
          <div class="centered-box">
              
              <button type="button" class="btn btn-primary box-items btn-box"><i class="fab fa-facebook-square"></i>Login with Facebook</button>
              
              
              <form class="box-items" id="loginForm" action="logincheck.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                  
                  <input type="checkbox" id="remember" name="remember" class="mb-4">
                    <label for="remember">Remember my email</label>
                </div>
                <button type="submit" class="btn btn-success btn-box">Login</button>
              </form>
          <a class="" href="#" id="forgotPW">Forgot your password?</a>
              
          </div>                  
      </div>
      
      
      

      
      
      <?php else: ?>
            <p class="text-center">Please sign in first!</p>
        <?php endif ?>

