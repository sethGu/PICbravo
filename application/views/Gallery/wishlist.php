

        <div class="row">

          <?php foreach ($wishlist as $image_item): ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              
              <a href="<?php echo base_url(); ?>Gallery/details/<?php echo $image_item['file_name'] ?>"><img class="card-img-top" src="<?php echo base_url(); ?>public/pictures/temp/<?php echo $image_item['file_name']; ?>" alt=""></a>
            
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo base_url(); ?>Gallery/user_intro/<?php echo $image_item['email'] ?>">Author: <?php echo $image_item['email']; ?></a>
                </h4>
                
                <p class="card-text"><?php echo $image_item['description']; ?></p>
                <a href="<?php echo base_url(); ?>Wishlist/delete_from_wishlist/<?php echo $image_item['file_name']; ?>">Delete from wishlist</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          

          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->