<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'script/head_imp_file.php';
      include 'php/function_php.php';
      $stud_id=$_GET['stud_id'];
      
      if(!isset($stud_id))
        header("location:Student_Page_7.php");

      if(isset($_POST['registration_step_2']))
        registration_2($stud_id,$_POST['moth_name'],$_POST['fath_name'],$_POST['g_phone'],$_POST['p_phone'],$_POST['board'],$_POST['school'],$_POST['class'],$_POST['teacher'],$_POST['sub_1'],$_POST['sub_2'],$_POST['sub_3'],$_POST['sub_4'],$_POST['addr'],$_POST['fee']);
    ?>
  </head>

  <body>

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
                    <h4><i class="fa fa-angle-right"></i><b>Step 2</b></h4>

                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-info active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      </div>
                    </div>

                    <h5>Detailed Information</h5><hr>

                    <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="Mother's Name"                   id="moth_name"      name="moth_name"   value="">
                              </div>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="Father's Name"                   id="fath_name"      name="fath_name"   value="">
                              </div>
                            
                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Gardian's Phone Number"          id="g_phone"        name="g_phone"     value="">
                              </div>

                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Personal Phone Number (If Any)"  id="p_phone"        name="p_phone"     value="">
                              </div>

                              <div class="col-sm-4" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Board"                           id="board"          name="board"      value="">
                              </div>
                              <div class="col-sm-4" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="School"                          id="school"         name="school"     value="">
                              </div>
                              <div class="col-sm-4" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Class"                           id="class"          name="class"      value="">
                              </div>

                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Subject 1"                       id="sub_1"          name="sub_1"      value="">
                              </div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Subject 2"                       id="sub_2"          name="sub_2"      value="">
                              </div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Subject 3"                       id="sub_3"          name="sub_3"      value="">
                              </div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Subject 4"                       id="sub_4"          name="sub_4"      value="">
                              </div>

                              <div class="col-sm-12" style="margin-top:1%;">
<textarea class="form-control" row="10" style="min-height:200px;" placeholder="Residential Address"                     id="addr"           name="addr"       value=""></textarea>
                              </div>

                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Instructor"                      id="teacher"        name="teacher"   value="">
                              </div>
                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Total Fees"                      id="fee"            name="fee"       value="">
                              </div>

                              <div class="col-sm-9" style="margin-top:1%;"></div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="reset" class="btn btn-default"   value="RESET"/>
                                  <input type="submit" class="btn btn-primary"/ value="SAVE & NEXT" id="submit" name="registration_step_2"/>
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
  </body>
</html>
