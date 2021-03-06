<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'script/head_imp_file.php';
      include 'php/function_php.php';
      if(isset($_POST['registration_step_1']))
        registration_1($_POST['email'],$_POST['fname'],$_POST['mname'],$_POST['lname'],$_POST['password']);
    ?>
  </head>

  <body onload="generateCaptcha();">

  <section id="container" >
  <?php
    include 'script/master_reg_nav.php';
    include 'script/master_reg_side_nav.php';
  ?>    
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                <h3 style="margin-left:1%;">Registration</h3><hr style="margin-left:1%;">
                <div class="col-lg-12 main-chart">
                  <div class="showback">
                    <h4><i class="fa fa-angle-right"></i><b>Step 1</b></h4>

                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-info active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>

                    <h5>Basic Information</h5><hr>

                    <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <!--
                              **********************************************************************************************************
                              START FIRST NAME, MIDDLE NAME AND LAST NAME IS TAKEN AS INPUT HERE
                              **********************************************************************************************************
                              -->
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" placeholder="First Name"  id="fname"   name="fname"   value="">
                              </div>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" placeholder="Middle Name" id="mname"   name="mname"   value="">
                              </div>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" placeholder="Last Name"   id="lname"   name="lname"   value="">
                              </div>
                              <!--
                              **********************************************************************************************************
                              EMAIL ID AND PASSWORD IS TAKEN AS INPUT HERE
                              **********************************************************************************************************
                              -->
                              <div class="col-sm-12" style="margin-top:1%;">
                                  <input type="Email" class="form-control" placeholder="Email ID"     id="email"      name="email"   value="">
                              </div>

                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="password" class="form-control" placeholder="Password"  id="password"   name="password"   value="">
                              </div>
                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="password" class="form-control" placeholder="Confirm Password">
                              </div>

                              <div class="col-sm-3" style="margin-top:1%;"> 
                                <input type="text"   class="form-control"   id="mainCaptcha"  readonly="readonly"/> 
                              </div>

                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="button" class="btn btn-primary"   id="refresh"      value="Refresh"   onclick="generateCaptcha();" />
                              </div>

                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text"   class="form-control"   id="txtInput"     placeholder="Enter the Captcha" />
                              </div>

                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input  type="reset"  class="btn btn-default" value="RESET"/>
                                  <input  type="submit" class="btn btn-primary" value="SAVE & NEXT"    id="submit"   name="registration_step_1"/>
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
         function generateCaptcha()
         {
             var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
             var i;
             for (i=0;i<4;i++){
               var a = alpha[Math.floor(Math.random() * alpha.length)];
               var b = alpha[Math.floor(Math.random() * alpha.length)];
               var c = alpha[Math.floor(Math.random() * alpha.length)];
               var d = alpha[Math.floor(Math.random() * alpha.length)];
              }
            var code = a + '' + b + '' + '' + c + '' + d;
            document.getElementById("mainCaptcha").value =  code;
          }
          function CheckValidCaptcha(){
              var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
              var string2 = removeSpaces(document.getElementById('txtInput').value);
              if (string1 == string2){
         document.getElementById('success').innerHTML = "Form is validated Successfully";
         //alert("Form is validated Successfully");
                return true;
              }
              else{       
         document.getElementById('error').innerHTML = "Please enter a valid captcha."; 
         //alert("Please enter a valid captcha.");
                return false;
          
              }
          }
          function removeSpaces(string){
            return string.split(' ').join('');
          }
      </script>  
  </body>
</html>
