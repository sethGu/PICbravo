  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="profileImg">

      <div class="w-100">
        <h2 class="mb-5">Profile Image</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Fresh your profile!</h3>
            <?php echo $error;?>
            <div class="subheading mb-3">Image can only be .jpg or .png</div>
            <div>No bigger than 5000000 bits.</div>
            <p>There might be a little bit lag, if not change, refresh the page(F5).</p>
          </div>
          
          <?php echo form_open_multipart('Uploadprofile/UploadprofileIMG');?>
            <div class="form-group">
              <label for="file">Filename:</label>
              <input type="file" class="form-control-file" name="file" id="file" /><br/>
            </div>
            <input type="submit" name="submit" value="submit" />
          <?php echo form_close(); ?>
      

        </div>
      </div>
    </section>
  </div>