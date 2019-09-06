<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>public/css/resume.min.css" rel="stylesheet">

    <title>User profile</title>
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
          .profile-top{display:  flex; justify-content: left;}
          .card-img-top{max-height: 190px; max-width: 190px;margin-left: 50px; margin-right: 100px;}
          
          
          
          
      </style>
      
  </head>
  <body id="page-top">
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
      
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>Userprofile/notification/<?php echo $_SESSION['email']; ?>">      
      <span class="d-none d-lg-block">
        <i class="fas fa-bell"></i>
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>Userprofile">User Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>">Homepage</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>Wishlist/<?php echo $_SESSION['email']; ?>">Wish list</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>Gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url();?>login/logout">Logout</a>
        </li>
      </ul>
    </div>
  </nav>