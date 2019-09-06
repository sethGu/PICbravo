  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Notifications</h2>
        <ul class="fa-ul mb-0">
        <?php if (isset($notify)): ?>
          <?php foreach ($notify as $notification): ?>
            <?php if($notification['viewed'] == "1"){
              echo '<i class="fas fa-check"></i>
            There is currently no notification.</li>';
            } else {
              echo '<li>
              <i class="fa-li far fa-bell text-warning" style="font-size: 20px;"></i>
              <h4 class="subheading mb-3">' . $notification['notify_type'] . '</h4>
              <p>' . $notification['msg'] . '</p>
            </li>';
            }
            ?>
              
            <!--<li>
              <i class="fa-li far fa-bell text-warning" style="font-size: 20px;"></i>
              <h4 class="subheading mb-3"><?php echo $notification['notify_type']; ?></h4>
              <p><?php echo $notification['msg']; ?></p>
            </li>-->
          <?php endforeach; ?>    
        <?php else: ?>  
          <i class="fa-li fa fa-check text-warning"></i>
            There is currently no notification.</li>
        <?php endif ?>
          <!--<li>        
            <i class="fa-li fa fa-trophy text-warning"></i>
            Mobile Web Specialist - Google Certification</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            2<sup>nd</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - James Buchanan High School - Hackathon 2006</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            3<sup>rd</sup>
            Place - James Buchanan High School - Hackathon 2005</li>
          -->


        </ul>
      </div>
    </section>
  </div>