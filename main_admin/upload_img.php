<!-- Front Image -->
<div class="col-3">
<div class="image-upload">
      <label for="file-input">
        <img id="previewImg" src="./images/upload_img.jpg" style="width: 100px; height: 100px;" />
        <p>Front Image<p/>
      </label>
      <input id="file-input" name="front_image" type="file" onchange="previewFile(this);" style="display: none;" />
    </div>
    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];
            if(file){
              var reader = new FileReader();
              reader.onload = function(){
                  $("#previewImg").attr("src", reader.result);
              }
              reader.readAsDataURL(file);
            }
        }
    </script> 
</div>
<!-- Back Image -->
<div class="col-3">
<div class="image-upload">
      <label for="san1">
        <img id="previewImg1" src="./images/upload_img.jpg" style="width: 100px; height: 100px;" />
        <p>Back Image<p/>
      </label>
      <input id="san1" name="back_image" type="file" onchange="previewFile1();" style="display: none;" />
    </div>
    <script>
        function previewFile1(){
            var file = $("#san1").get(0).files[0];
            if(file){
              var reader = new FileReader();
              reader.onload = function(){
                  $("#previewImg1").attr("src", reader.result);
              }
              reader.readAsDataURL(file);
            }
        }
    </script> 
</div>
<!-- Left Image -->
<div class="col-3">
<div class="image-upload">
      <label for="san2">
        <img id="previewImg2" src="./images/upload_img.jpg" style="width: 100px; height: 100px;" />
        <p>Left Image<p/>
      </label>
      <input id="san2" name="left_image" type="file" onchange="previewFile2();" style="display: none;" />
    </div>
    <script>
        function previewFile2(){
            var file = $("#san2").get(0).files[0];
            if(file){
              var reader = new FileReader();
              reader.onload = function(){
                  $("#previewImg2").attr("src", reader.result);
              }
              reader.readAsDataURL(file);
            }
        }
    </script> 
</div>
<!-- Right Image -->
<div class="col-3">
<div class="image-upload">
      <label for="san3">
        <img id="previewImg3" src="./images/upload_img.jpg" style="width: 100px; height: 100px;" />
        <p>Right Image<p/>
      </label>
      <input id="san3" name="right_image" type="file" onchange="previewFile3();" style="display: none;" />
    </div>
    <script>
        function previewFile3(){
            var file = $("#san3").get(0).files[0];
            if(file){
              var reader = new FileReader();
              reader.onload = function(){
                  $("#previewImg3").attr("src", reader.result);
              }
              reader.readAsDataURL(file);
            }
        }
    </script> 
</div>
<!-- Front Inner Image -->
<div class="col-3">
<div class="image-upload">
      <label for="san4">
        <img id="previewImg4" src="./images/upload_img.jpg" style="width: 100px; height: 100px;" />
        <p>Front Inner Image<p/>
      </label>
      <input id="san4" name="front_inner_image" type="file" onchange="previewFile4();" style="display: none;" />
    </div>
    <script>
        function previewFile4(){
            var file = $("#san4").get(0).files[0];
            if(file){
              var reader = new FileReader();
              reader.onload = function(){
                  $("#previewImg4").attr("src", reader.result);
              }
              reader.readAsDataURL(file);
            }
        }
    </script> 
</div>
<!-- Back Inner Image -->
<div class="col-3">
<div class="image-upload">
      <label for="san5">
        <img id="previewImg5" src="./images/upload_img.jpg" style="width: 100px; height: 100px;" />
        <p>Back Inner Image<p/>
      </label>
      <input id="san5" name="back_inner_image" type="file" onchange="previewFile5();" style="display: none;" />
    </div>
    <script>
        function previewFile5(){
            var file = $("#san5").get(0).files[0];
            if(file){
              var reader = new FileReader();
              reader.onload = function(){
                  $("#previewImg5").attr("src", reader.result);
              }
              reader.readAsDataURL(file);
            }
        }
    </script> 
</div>

