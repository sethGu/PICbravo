<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Gallery</title>
      <style>
          
          .mb-3{max-width: 650px;   width: 100%;    z-index: 2; padding-top: 6px;}
          
          .joincard{max-width: 590px; margin: 40px auto; border: 1px solid #eee; border-radius: 3px; background: #fff;}
          .tabs--large{float: inherit;}
          .centered-box{margin: 40px auto; text-align: center;}
          .box-items{margin: 1.5em auto;}
          .btn-box{font-size: 16px; width: 80%; line-height: 1.65; padding: 10px 16px;}
          .toplink{color: #fff;}
          .footer{display: block;}
          .footer-container{display: flex; justify-content: space-around;}
          .footer-item{}
          .footer-item a{color: #fff;}
          #footer-copyright{display: inline-block;}
          #footer-copyright img{width: 25px; height: 25px;}
          #footer-copyright p{color: #ddd;}
          .footer-item-social{display: inline-block;}
          .form-group{margin: 15px auto; padding-left: 10px; padding-right: 10px;}
          .rightbar{display: inline;}
          .card-img-top{width: 254px; height: 254px;}
          .fas{font-size: 25px; margin-left: 15px;}
          .col-lg-4{margin-top: 20px;}
          .user-details{display: flex; justify-content: center;}
          .fa-ser-plus{font-size: 50px;}
          a {color: grey;}
          a:focus, a:hover {text-decoration: none;color: black;}
          .resume-content{display: flex; justify-content: center;}
          .show-picture{display: block;}
          .show-pic{margin: 20px auto;}
          .show-bigpic{width: 750px; height: 700px;}
          .success_note{margin: 30px auto; text-align: center; margin-bottom: 300px;}


          
          
          
      </style>
   
      
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      
     <div class="navbar-height-padding"></div> 
      
      <!-- nav container -->
      
      <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <span><nav class="nav nav-pills nav-fill">
        
        <?php 
            if (isset($_SESSION["email"])) {
                echo '<a class="nav-item nav-link toplink" href="' . base_url() .'Login/logout">Sign out</a>';
                echo '<a class="nav-item nav-link toplink" href="' . base_url() .'Userprofile">User profile</a>';
            } else {
                echo '<a class="nav-item nav-link toplink" href="'. base_url() . 'Login/">Sign in</a>';
            }
        ?>
        <a class="nav-item nav-link toplink" href="<?php echo base_url() ?>Picbravo">Homepage</a>
        <a class="nav-item nav-link toplink" href="<?php echo base_url() ?>Gallery" tabindex="-1" aria-disabled="true">Gallery</a>
      </nav></span>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <div class="rightbar"><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php 
            if (isset($_SESSION["email"])) {
              //if (condition) {
                echo '<a href="' . base_url() .'Userprofile/notification/' . $_SESSION['email'] . '"><i class="fas fa-bell"></i></a>';
                //}
            } else {
                
            }
          ?>
            <!--<a href="#"><i class="fas fa-bell"></i></a>-->
         </div> 
          <form class="input-group mb-3" action="<?php echo base_url();?>Gallery/search" method="post">
            <input type="text" name="search" class="form-control" placeholder="Search for free photos and videos" aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"> </i></button>
            </div>
          </form>
            
        </nav>
      </div>

          
  