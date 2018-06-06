<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
    include 'script/head_imp_file.php';
    include 'php/function_php.php';
    $stud_id=$_GET['stud_id'];
    if(!isset($stud_id))
        header("location:Student_Page_7.php");
  ?>
    <style type="text/css">
     #payment_success
     {
      display: none;
     }
     #payment_unsuccess
     {
      display: none;
     }
    </style>
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

                  <div class="showback" id="cash_payment_buttons">
                    <h4><i class="fa fa-angle-right"></i><b>Step 4</b></h4>

                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-info active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                      </div>
                    </div>

                    <h5>Registration Fees</h5><hr>

                      <a href="Payment/PayUMoney_form.php"><button type="button" class="btn btn-primary btn-lg btn-block">Pay with Card</button></a>
                      <button type="button" class="btn btn-info btn-lg btn-block"     onclick="cash_js();">Pay with Cash</button>
                      
                  </div>

                  <div class="showback" id="cash_admin" style="display:none;">
                    <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <div class="col-sm-4">
                                  <input type="password" class="form-control" placeholder="Admin Password" id="admin_password">
                              </div>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" placeholder="cost" value="500" readonly>
                              </div>
                              <div class="col-sm-4">
                                  <button type="button" class="btn btn-theme02" onclick="cash_confirm();"><i class="fa fa-check"></i>Confirm Payment</button>
                              </div>
                          </div>
                    </form>
                  </div>

                  <div class="showback" id="payment_success">
                    <div class="alert alert-success"><b>Well done!</b> You have registered successfully. Login with your registered Email ID and Password!</div>
                    <center>
                      <button type="button" class="btn btn-theme"><a href="login.php"><i class="fa fa-lock"></i> Login</a></button>
                    </center>
                  </div>

                  <div class="showback" id="payment_unsuccess">
                    <div class="alert alert-danger"><b>Oh Snap!</b>You sure, you are the admin of Asterix?</div>
                    <center>
                      <button type="button" class="btn btn-theme04" onclick="refresh();"><i class="fa fa-cross"></i> Try Again</button>
                    </center>
                  </div>

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
      function cash_js()
      {
        var x = document.getElementById("cash_admin");
        if (x.style.display == "none") 
            {x.style.display = "block";} 
        else 
            {x.style.display = "none";}
      }
      function cash_confirm()
      {
        var x = document.getElementById("payment_success"); 
        var y = document.getElementById("cash_admin");
        var z = document.getElementById("payment_unsuccess");
        var p = document.getElementById("admin_password").value;
        var t = document.getElementById("cash_payment_buttons");
        /*
        ========================================================
        ADMIN PASSWORD IS UPDATED IN THIS PLACE
        ========================================================
        */
        if(p=="abcd")
        {
          var g     =   <?php echo json_encode(registration_4($stud_id), JSON_PRETTY_PRINT);?>;
          x.style.display = "block";
          y.style.display = "none";
          t.style.display = "none";
        }
        else
        {
          z.style.display = "block";
          y.style.display = "none";
        }
      }
      function refresh()
      {
        document.getElementById("payment_success").style.display  = "none"; 
        document.getElementById("cash_admin").style.display  = "none";;
        document.getElementById("payment_unsuccess").style.display  = "none";;
      }
      function cash_ss()
      {
        window.alert("Hello");
      }
    </script>
  </body>
</html>
