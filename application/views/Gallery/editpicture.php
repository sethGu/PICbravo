
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="profileImg">

      <div class="w-100">
        <h2 class="mb-5">Edit picture</h2>

        <div class="resume-content">
            
          <form class="box-items" id="loginForm" action="<?php echo base_url();?>Uploadpicture/editing/<?php echo $image['file_name'] ?>" method="post">
            <div class="form-group">
            <?php if (strlen($status) > 3): echo '<div class="alert alert-danger">' . $status . '</div>'; endif?>
            </div>

            <label for="exampleFormControlInput1" id="sel">watermark</label>
            <div class="input-group">   
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="watermark" value="0" aria-label="Radio button for following text input">no
                </div>
                <div class="input-group-text">
                  <input type="radio" name="watermark" value="1" aria-label="Radio button for following text input">yes
                </div>
              </div>
            </div>

            
              <div>
              <label for="exampleFormControlInput1" id="sel">crop</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                  <input type="radio" name="crop" value="0" aria-label="Radio button for following text input">no
                </div>
                <div class="input-group-text">
                  <input type="radio" name="crop" value="1" aria-label="Radio button for following text input">yes
                </div>
                </div>
                <input type="text" name="a1" id="a1" placeholder="width (px)" class="form-control" aria-label="Text input with radio button">
                <input type="text" name="a2" id="a2" placeholder="height (px)" class="form-control" aria-label="Text input with radio button">
                <input type="text" name="a3" id="a3" placeholder="x_axis (px)" class="form-control" aria-label="Text input with radio button">
                <input type="text" name="a4" id="a4" placeholder="y_axis (px)" class="form-control" aria-label="Text input with radio button">
              </div></div>

                  <!--<label for="exampleFormControlInput1" id="sel" onchange="javascript:doit();">crop
                    <input type="radio" name="crop" value="1" checked>yes
                    <input type="radio" name="crop" value="0" checked>no</label><br/>
                    <input placeholder="width (px)" type="text" name="a1" id="a1" /> 
                    <input placeholder="height (px)" type="text" name="a2" id="a2" />
                    <input placeholder="x_axis (px)" type="text" name="a3" id="a3" /> 
                    <input placeholder="y_axis (px)" type="text" name="a4" id="a4" />-->

        <div>
          <label for="exampleFormControlInput1" id="sel">rotate</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" name="rotate" value="0" aria-label="Radio button for following text input">no
              </div>
              <div class="input-group-text">
                <input type="radio" name="rotate" value="1" aria-label="Radio button for following text input">yes
              </div>
            </div>
            <div class="input-group-prepend">
              <span class="input-group-text">Specifies the rotation Angle of the image.Notice that the rotation is counterclockwise, so if you want to go 90 degrees to the right, you have to define this as 270.</span>
            </div>
            <input type="text" name="b2" id="b2" placeholder="angle (°)" class="form-control" aria-label="Text input with radio button">
            
          </div>
        </div>    
                  
                  
                  <!--<label for="exampleFormControlInput1" id="sel2" onchange="javascript:doit2();">rotate
                    <input type="radio" name="rotate" value="1" checked>yes
                    <input type="radio" name="rotate" value="0" checked>no</label><br/>
                    <label for="exampleFormControlSelect1" name="b1" id="b1">Specifies the rotation Angle of the image.Notice that the rotation is counterclockwise, so if you want to go 90 degrees to the right, you have to define this as 270.</label>
                    <input placeholder="angle" class="form-control" type="text" name="b2" id="b2" /> -->
                  
        <div>
          <label for="exampleFormControlInput1" id="sel">resize</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" name="resize" value="0" aria-label="Radio button for following text input">no
              </div>
              <div class="input-group-text">
                <input type="radio" name="resize" value="1" aria-label="Radio button for following text input">yes
              </div>
            </div>
            <input type="text" name="c1" id="c1" placeholder="width (px)" class="form-control" aria-label="Text input with radio button">
            <input type="text" name="c2" id="c2" placeholder="height (px)" class="form-control" aria-label="Text input with radio button">
            
          </div>
        </div>            

                  <!--<label for="exampleFormControlInput1" class="form-control" id="sel3" onchange="javascript:doit3();">resize
                    <input type="radio" name="resize" value="1" checked>yes
                    <input type="radio" name="resize" value="0" checked>no</label><br/>
                    <input placeholder="width (px)" type="text" name="c1" id="c1" /> 
                    <input placeholder="height (px)" type="text" name="c2" id="c2" />
                    -->

                  
                  
                
              
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description (within 200 characters)</label>
              <label for="exampleFormControlTextarea1">You must input the description otherwise upload failed.</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-outline-info">Submit</button>
            </div>

          </form>

          <div class="show-picture">
            <h4 class="md-3 show-pic">The picture:</h4>
            <img src="<?php echo base_url(); ?><?php echo $image['image_path']; ?>" class="show-pic show-bigpic">
          </div>

          </div>
      </div>
    </section>