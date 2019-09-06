<?php if (isset($_SESSION["email"])): ?>
<div class="container-fluid p-0">
	<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="profile-edit">
      <div class="w-100">
        <h2 class="mb-5">User Profile Upload</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
            <form class="box-items" id="loginForm" action="<?php echo base_url();?>Uploadprofile/uploadprofile" method="post">
              <div class="form-group">
				<?php if (strlen($status) > 0): echo '<div class="alert alert-danger">' . $status . '</div>'; endif?>

                <label for="exampleFormControlInput1">Prefered email address</label>
                <input type="email" name="preferedEmail" class="form-control  form-control-lg" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">User name (within 16 characters)</label>
                <input class="form-control" name="username" type="text" placeholder="user name">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">Nickname (within 15 characters)</label>
                <input class="form-control" name="nickname" type="text" placeholder="nickname">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description (within 400 characters)</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-outline-info">Submit</button>
              </div>

            </form>

          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">March 2013 - Present</span>
          </div>
        </div>

        

      </div>

    </section>
    <?php else: ?>
            <h2 class="mb-5">Please login first!</h2>
        <?php endif ?>

    <hr class="m-0">