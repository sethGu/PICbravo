

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <div class="profile-top">
          <a href="<?php echo base_url() ?>Uploadprofile/uploadPIMG"><img class="card-img-top" src="<?php echo base_url(); ?><?php echo $profileIMG ?>" alt=""></a>
          <h1 class="mb-0">
            <?php echo $profile_details['username']; ?><br><span class="text-primary"><?php echo $profile_details['nickname']; ?></span>
          </h1>
        </div>
        <div class="subheading mb-5">
          <?php echo '<a href="mailto:'.$profile_details['preferedEmail'].'">'; ?><?php echo $profile_details['preferedEmail']; ?></a>
        </div>
        <p class="lead mb-5"><?php echo $profile_details['description']; ?></p>
        <a href="<?php echo base_url();?>Uploadprofile"><button type="button" class="btn btn-outline-info">Profile Edit</button></a>
        <a href="<?php echo base_url(); ?>VerifySecurityQuestion"><button type="button" class="btn btn-outline-info">Change Password</button></a>
      </div>
    </section>

    <hr class="m-0">

    

    


    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Notifications</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Mobile-First, Responsive Design</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Browser Testing &amp; Debugging</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Functional Teams</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Agile Development &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>

    <hr class="m-0">

    

  </div>
