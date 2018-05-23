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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> STUDENT PROFILE</h3><hr>
              <div class="row mt">

                <div class="col-lg-3 main-chart">
                  <div class="showback">
                    <p class="centered"><img src="assets/img/ui-zac.jpg" class="img-circle" width="155"></p>
                    <p class="centered">
                      <button type="button" class="btn btn-default btn-xs btn-theme02">View Profile</button>
                      <button type="button" class="btn btn-default btn-xs btn-theme03">Transaction History</button>
                    </p>
                  </div>
                </div>

                <div class="col-lg-9 main-chart">
                  <div class="showback">
                    <!--Table-->
                      <table class="table table-bordered">
                      <!--Table body-->
                      <tbody>
                          <tr>
                              <th colspan = "2"><b style="color:#4c90ff;">FULL NAME</b></th>
                              <td colspan = "1">SWAROOP ACHARJEE</td>
                              <td colspan = "1"><b style="color:#4c90ff;">REG ID: </b></td>
                              <td colspan = "1">123</td>
                          </tr>
                          <tr>
                              <th>1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th>2</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@TwBootstrap</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th>3</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th>4</th>
                              <td colspan="3">Larry the Bird</td>
                              <td>@mdo</td>
                          </tr>
                      </tbody>
                      <!--Table body-->

                  </table>
                  <!--Table-->
                  </div>
                </div>

              </div>  
           
                


              <div class="row mt">
                <div class="col-lg-12 main-chart">
                <div class="showback">
                <h3><i class="fa fa-angle-right"></i>TRANSACTION HISTORY</h3><hr>

                <table class="table table-bordered table-striped table-condensed">
                              
                              <thead style="background-color:#002b80; color:white;">
                              <tr>
                                  <th class="numeric">Order ID</th>
                                  <th class="numeric">Date</th>
                                  <th class="numeric">Amount</th>
                                  <th class="numeric">Time</th>
                              </tr>
                              </thead>

                              <tbody>

                              <tr>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">9,395</td>
                              </tr>

                              <tr>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">9,395</td>
                              </tr>

                              <tr>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">9,395</td>
                              </tr>

                              <tr>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">9,395</td>
                              </tr>
                              </tbody>
                          </table>
                        

                </div>
                  </div>
              </div>

          </section>
      </section>

      <!--main content end-->
  </section>
  <?php
    include 'script/footer.php';
    include 'script/tail_imp_file.php';
  ?>
  </body>
</html>
