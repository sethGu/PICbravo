  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">PicBravo Gallery</h1>
        <div class="list-group">
          <?php 
            if (isset($_SESSION["email"])) {
                echo '<a class="list-group-item" href="' . base_url() .'Gallery">Gallery</a>';
                echo '<a class="list-group-item" href="' . base_url() .'Uploadpicture">Upload image</a>';
                echo '<a class="list-group-item" href="' . base_url() .'Wishlist/' . $_SESSION['email'] . '">Wishlist</a>';

            } else {
                echo '<a class="list-group-item" href="' . base_url() .'Gallery">Gallery</a>';
                
            }
          ?>
<!--
          <a href="#" class="list-group-item">Pictures</a>
          <a href="<?php echo base_url(); ?>Wishlist" class="list-group-item">Wishlist</a>
-->
          <!--<a href="#" class="list-group-item">Category 3</a>-->
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        