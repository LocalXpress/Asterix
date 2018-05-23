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
    include 'script/master_nav.php';
    include 'script/side_nav.php';
  ?>


      <section id="main-content">
          <section class="wrapper">

              <div class="row">
              <h3 style="margin-left:1%; margin-top:1%;">CONTACT US</h3><hr style="margin-left:1%;">
                <div class="col-lg-8 main-chart">
                 <div class="showback">
                  <h4>Send us your query here</h4><hr>
                  <div class="alert alert-warning">Usually replies in a day!</div>
                  <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <div class="col-sm-4">
                                  <input type="email" class="form-control" placeholder="From:">
                              </div>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" placeholder="Subject:">
                              </div>

                              <div class="col-sm-12" style="margin-top:1%;">
                        <textarea class="form-control" id="exampleFormControlTextarea3" row="10" style="min-height:200px;" placeholder="Write your message here"></textarea>
                              </div>

                              <div class="col-sm-9" style="margin-top:1%;"></div>
                              <div class="col-sm-3" style="margin-top:1%;">
                                  <button type="button" class="btn btn-default">Reset</input>
                                  <button type="button" class="btn btn-primary">Send</input>
                          </div>

                          </div>
                    </form>
                 </div>
					      </div>
                <div class="col-lg-4 main-chart">
                  <div class="showback">
                  <h4>Contact Details</h4><hr>
                  <div class="alert alert-success">Contact Details will be put here</div>
                  </div>  
                </div>

              </div>
          </section>
      </section>

      <!--main content end-->
  </section>

  <?php
    include 'script/tail_imp_file.php';
  ?>	

  </body>
</html>
