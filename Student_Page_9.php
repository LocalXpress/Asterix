<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'script/head_imp_file.php';
      include 'php/function_php.php';

      //function is called from here!!!!
      if(isset($_POST['update_display_pic']))
        update_display_picture(6,$_FILES);
    ?>
    <style type="text/css">
    .btn-file 
    {
      position: relative;
      overflow: hidden;
    }

    .btn-file input[type=file] 
    {
      position: absolute;
      top: 0;
      right: 0;
      min-width: 100%;
      min-height: 100%;
      font-size: 100px;
      text-align: right;
      filter: alpha(opacity=0);
      opacity: 0;
      outline: none;
      background: white;
      cursor: inherit;
      display: block;
    }

    #img-upload
    {
      width: 20%;
      height: 20%;
      padding: 1%;
    }

    </style>
  </head>

  <body>

  <section id="container" >
  <?php
    include 'script/master_reg_nav.php';
    include 'script/master_reg_side_nav.php';
  ?>
<!-- 
**********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                <h3 style="margin-left:1%;">Registration</h3><hr style="margin-left:1%;">
                <div class="col-lg-12 main-chart">
                  <div class="showback">
                    <h4><i class="fa fa-angle-right"></i><b>Step 3</b></h4>

                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-info active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      </div>
                    </div>

                    <h5>Picture</h5><hr>

                    <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <div class="col-sm-12">  
                              <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp" name="update_display_pic" value="">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload'/>
                            </div>
                              <div class="col-sm-9" style="margin-top:1%;">
                                <div id="img_ch"></div>
                              </div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input  type="reset" id="reset"   name="reset_display_pic"  value="RESET"  class="btn btn-default"/>
                                  <input  type="submit" id="submit" name="update_display_pic" value="UPDATE" class="btn btn-primary"/>
                              </div>

                          </div>
                    </form>

                  </div>	
					      </div>
              </div>
          </section>
      </section>

      <!--main content end-->
  </section>
<?php
  include 'script/tail_imp_file.php';
  include 'script/footer.php';
?>
    <script type="text/javascript">
        $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
                $("#img_ch").html("<div class="+"'alert alert-success'"+"><b>Well done!</b>Looks Cool Enough and you may proceed!</div>");
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });
      </script>  
  </body>
</html>
