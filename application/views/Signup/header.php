<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Login</title>
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
  <a class="nav-item nav-link toplink" href="<?php echo base_url() ?>Login">Login</a>
  <a class="nav-item nav-link disabled" href="#">Sign Up</a>
  <a class="nav-item nav-link toplink" href="<?php echo base_url() ?>Picbravo">Homepage</a>
  <a class="nav-item nav-link toplink" href="#" tabindex="-1" aria-disabled="true">Gallery</a>
</nav></span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search for free photos and videos" aria-label="Search" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"><a href="#"></a> </i></button>
  </div>
</div>
      
  </nav>
</div>
      <div class="joincard">
          <div class="tabs tabs--large">
              <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() ?>Login">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Sign Up</a>
                  </li></ul>
          </div>