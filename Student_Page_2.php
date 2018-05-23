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
                
                <div class="col-lg-12 main-chart">
                  <div class="showback"> 
                    <h4><i class="fa fa-angle-right"></i>Basic Profile</h4>
                    <b>NAME:</b>  Swaroop Acharjee<br>
                    <b>CLASS:</b> XII<br> 
                    <b>SCHOOL:</b> KV Ballygunge<br>
                    <b>ADDRESS:</b>Narendrapur<br>
                    <b>STUDENT PHONE NUMBER:</b> 1548053498590<br>
                    <b>PARENTS PHONE NUMBER:</b> 495834905894305<br>
                    <b>EMAIL ADDRESS:</b> something@gmail.com<br>
                    <b>SUBJECT:</b> Some Subject<br>
                    <b>INSTRUCTOR:</b> Swaroop Acharjee <br>
                    <center><button class="btn btn-primary">Print</button></center>
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
    include 'script/tail_imp_file.php';
  ?>
  </body>
</html>
