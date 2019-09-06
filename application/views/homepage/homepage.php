<!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Immerse in PicBravo...</h2>
          <p class="text-white-50">PIC Bravo is a not just picture website. Go 
            <a href="#signup"> search </a> to find what you want, for any purpose, personal or commercial...</p>
        </div>
      </div>
      <img src="<?php echo base_url(); ?>public/img/ipad.jpg" class="img-fluid" alt="">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="<?php echo base_url(); ?>public/img/bg-masthead.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>DEEP</h4>
            <p class="text-black-50 mb-0">Pic Bravo has countless photos and videos. Just like deep space, the stock is waiting to explore...</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php echo base_url(); ?>public/img/demo-image-01.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">DARK</h4>
                <p class="mb-0 text-white-50">PIC Bravo is not in commercial use now, the materials are not similar as other websites.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?php echo base_url(); ?>public/img/demo-image-02.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Fantasy</h4>
                <p class="mb-0 text-white-50">Similar with people's brain, the stock imagery of PIC Bravo can be whatever you want. Just browse now...</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Search for photos and videos</h2>

          <form class="form-inline d-flex" action="<?php echo base_url();?>Gallery/search" method="post">
            <input type="text" name="search" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Type to search...">
            <button type="submit" class="btn btn-primary mx-auto"><i class="fas fa-search"> </i></button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Auther</h4>
              <hr class="my-4">
              <div class="small text-black-50">Junquan Gu</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">junquan.gu@connect.uq.edu.au</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+61 410 630 166</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; PIC Bravo 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
