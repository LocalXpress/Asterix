<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      //Should be put at the start of the each page!
      session_start();
      include 'script/head_imp_file.php';
      include 'php/function_2.php';
      $stud_id  =  $_SESSION['stud_id'];

    ?>
  </head>
  <script type="text/javascript">
  function onload_required_function()
  {
    info();
  }
  </script>
  <body onload='onload_required_function();'>
    
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
            <!--
            ********************************************************************************************************************************************************
            START OF PAYMENT GATEWAY
            ********************************************************************************************************************************************************
            -->
              <div class="row">
                <div class="col-lg-12 main-chart">
                  <div class="showback">
                    <h4>Pay Your Fees</h4><hr>
                    Name: <b>Swaroop Acharjee</b><br>
                    Payable Amount: <b>Rs. 1000.00</b>(Total fees is calculated together for all the subject)<br>
                    <br>
                    <div class="alert alert-warning"><b>Warning!</b> Check the information and Proceed to payment only if the information is correct!</div>
                    <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <div class="col-sm-5">
                                  <input type="email" class="form-control" placeholder="Registered Email ID">
                              </div>
                              <div class="col-sm-5">
                                  <input type="password" class="form-control" placeholder="Password">
                              </div>
                              <div class="col-sm-2">
                                  <button type="button" class="btn btn-info">Pay</button>
                              </div>
                          </div>
                    </form>
                  </div>
            <!--
            ********************************************************************************************************************************************************
            END OF PAYMENT GATEWAY
            ********************************************************************************************************************************************************
            -->
            <!--
            ********************************************************************************************************************************************************
            TRANSACTION TABLE IS PUT HERE
            ********************************************************************************************************************************************************
            --> 
            <div class="row mt">
              <div class="col-lg-12 main-chart">
                <div class="showback">
                  <h3><i class="fa fa-angle-right"></i>TRANSACTION HISTORY</h3><hr>
                    <table class="table table-bordered table-striped table-condensed">
                      <thead style="background-color:#002b80; color:white;">
                        <tr>
                          <th class="numeric">Order ID</th>
                          <th class="numeric">Amount</th>
                          <th class="numeric">Paid for</th>
                          <th class="numeric">Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php get_student_tran($stud_id); ?>
                      </tbody>
                    </table>
                    <center><a href="transaction.php" target="_blank">See More</a></center>
                </div>
              </div>
            </div>
            <!--
            ********************************************************************************************************************************************************
            TRANSACTION TABLE ENDS HERE
            ********************************************************************************************************************************************************
            -->  
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
