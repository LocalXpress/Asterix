<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'script/head_imp_file.php';
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

                    <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="Mother's Name">
                              </div>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="Father's Name">
                              </div>
                            
                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Gardian's Phone Number">
                              </div>

                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Personal Phone Number (If Any)">
                              </div>

                              <div class="col-sm-4" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Board">
                              </div>
                              <div class="col-sm-4" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="School">
                              </div>
                              <div class="col-sm-4" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Class">
                              </div>

                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Subject 1">
                              </div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Subject 2">
                              </div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Subject 3">
                              </div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Subject 4">
                              </div>

                              <div class="col-sm-12" style="margin-top:1%;">
                        <textarea class="form-control" id="exampleFormControlTextarea3" row="10" style="min-height:200px;" placeholder="Residential Address"></textarea>
                              </div>

                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Instructor">
                              </div>
                              <div class="col-sm-6" style="margin-top:1%;">
                                  <input type="text" class="form-control" placeholder="Total Fees">
                              </div>

                              <div class="col-sm-9" style="margin-top:1%;"></div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <button type="button" class="btn btn-default">Reset</button>
                                  <button type="button" class="btn btn-primary">Next</button>
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
