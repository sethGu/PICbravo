<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="profileImg">

      <div class="w-100">
        <h2 class="mb-5">Upload picture to PicBravo</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Choose a picture from your PC.</h3>
            <div class="subheading mb-3">Image can only be .jpg, .gif and .png</div>
            <div>No bigger than 10000000 bits.</div>
            <p>You can choose to edit the picture after you upload the picture.</p>
          </div>
          <?php echo $error;?>
          <?php echo form_open_multipart('Uploadpicture/do_upload');?>
            <div class="form-group">
              <label for="file">Filename:</label>
              <input type="file" class="form-control-file" name="file" id="file" /><br/>
            </div>
            <!--<div class="form-group">
              <label for="exampleFormControlTextarea1">Picture description (within 200 characters)</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>-->
            <input type="submit" name="submit" value="submit" />

          <?php echo form_close(); ?>

        </div>
      </div>
    </section>