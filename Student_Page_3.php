<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      //Should be put at the start of the each page!
      session_start();
      include 'script/head_imp_file.php';
      include 'php/function_2.php';
      
      if(!isset($_SESSION['stud_id']))
        echo '<script>window.location="index.php"</script>';
      
      $stud_id  =  $_SESSION['stud_id'];

      if(isset($_POST['payment_confirm']))
          payment_details_confirm($stud_id,$_POST['fee'],$_POST['paid_for']);

    ?>
  </head>
  <script type="text/javascript">
  function onload_required_function()
  {
    info();
    information();
  }
  function information()
  {
    var student_details   =  <?php echo json_encode(get_student_details($stud_id), JSON_PRETTY_PRINT);?>;
    fee.value             =   student_details['0']['fee'];
    card_fee.value        =   student_details['0']['fee'];
    full_name_card.value  =   student_details['0']['fname']+' '+student_details['0']['mname']+' '+student_details['0']['lname'];
    email_card.value      =   student_details['0']['email'];
    phone_card.value      =   student_details['0']['g_phone'];


    payable.innerHTML     =   "Total Payable Amount: <b>"+student_details['0']['fee']+"</b>";
    ff_name.innerHTML     =   "Name: <b>"+student_details['0']['fname']+' '+student_details['0']['mname']+' '+student_details['0']['lname']+"</b>";
    e_email.innerHTML     =   "Email: <b>"+student_details['0']['email']+"</b>";

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

                    <div class="alert alert-info">
                      <div class="col-sm-4"><div id="ff_name"></div></div>
                      <div class="col-sm-4"><div id="e_email"></div></div>
                      <div class="col-sm-4"><div id="payable"></div></div>
                      <br>
                    </div>
                    
                    <br>
                    <div class="alert alert-warning"><b>Warning!</b> Check the information and Proceed to payment only if the information is correct!</div>
                    <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <div class="col-sm-6">
                                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#card_payment">Pay with Card</button>
                              </div>

                              <div class="col-sm-6">
                                <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="collapse" data-target="#cash_payment">Pay with Cash</button>
                              </div>
                          </div>
                    </form>

                    <div id="card_payment" class="collapse">
                      <form class="form-horizontal style-form" action="Payment/form_process.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">

                          <div class="col-sm-3">
                            Txn ID: <input type="text" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" class="form-control" readonly/>
                          </div>

                          <div class="col-sm-3">
                            Amount: <input type="text" name="amount" value="" id="card_fee" class="form-control" readonly/>
                          </div>

                          <div class="col-sm-3">
                            Paying for: 
                            <select class="form-control" name="productinfo">
                              <option value="January">January</option>
                              <option value="February">February</option>
                              <option value="March">March</option>
                              <option value="April">April</option>
                              <option value="May">May</option>
                              <option value="June">June</option>
                              <option value="July">July</option>
                              <option value="August">August</option>
                              <option value="September">September</option>
                              <option value="October">October</option>
                              <option value="November">November</option>
                              <option value="December">December</option>
                            </select>
                          </div>  
                          <!--
                          INVISIBLE PART OF THE INFORMATION  
                          -->
                          <input type="hidden"    name="firstname"    value=""        id="full_name_card"/>
                          <input type="hidden"    name="email"        value=""        id="email_card"/>
                          <input type="hidden"    name="phone"        value=""        id="phone_card"/>
                          <!--ENTER THE FULL URL OF THE SUCCESS AND FAILURE PHP-->
                          <input type="hidden"  name="surl"         value="/success.php"/>
                          <input type="hidden"  name="furl"         value="/fail.php"/>

                          <div class="col-sm-3">
                            <br>
                            <input  type="submit" class="btn btn-info btn-block"/>
                          </div>

                        </div>
                      </form>
                    </div> 

                    <div id="cash_payment" class="collapse">
                    <!--THIS PART IS TO BE DONE USING POST SESSIONS-->
                      <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              
                              <div class="col-sm-3">
                                  <input type="password" class="form-control" placeholder="Admin Password" id="admin_password" required>
                              </div>

                              <div class="col-sm-3">
                                <input type="text" class="form-control" value="" id="fee" name="fee" readonly>
                              </div>

                              <div class="col-sm-3">
                                  <select class="form-control" id="paid_for" name="paid_for">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                  </select>
                              </div>

                              <div class="col-sm-3">
                                  <input  type="submit" id="submit" name="payment_confirm" value="Confirm" class="btn btn-info btn-block"/>
                              </div>

                          </div>
                      </form>

                    </div> 

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
