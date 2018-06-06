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
      
<!-- 
**********************************************************************************************************************************************************
MAIN CONTENT
***********************************************************************************************************************************************************
 -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
<!-- 
**********************************************************************************************************************************************************
MARKET PLACE
***********************************************************************************************************************************************************
 -->
        <div class="row">
          <div class="col-lg-12 main-chart">
            <div class="showback">
              <h4>Market Place</h4><hr>

          <! -- 3RD ROW OF PANELS -->
          <!-- Product Panel -->
          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="product-panel-2 pn">
                <div class="badge badge-hot">HOT</div>
                <img src="assets/img/product.jpg" width="200" alt="">
                <h5 class="mt">Flat Pack Heritage</h5>
                <h6>TOTAL SALES: 1388</h6>
                <button class="btn btn-small btn-theme04">BUY</button>
              </div>
            </div><! --/col-md-4 -->


            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="product-panel-2 pn">
                <div class="badge badge-hot">HOT</div>
                <img src="assets/img/product.jpg" width="200" alt="">
                <h5 class="mt">Flat Pack Heritage</h5>
                <h6>TOTAL SALES: 1388</h6>
                <button class="btn btn-small btn-theme04">BUY</button>
              </div>
            </div><! --/col-md-4 -->


            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="product-panel-2 pn">
                <div class="badge badge-hot">HOT</div>
                <img src="assets/img/product.jpg" width="200" alt="">
                <h5 class="mt">Flat Pack Heritage</h5>
                <h6>TOTAL SALES: 1388</h6>
                <button class="btn btn-small btn-theme04">BUY</button>
              </div>
            </div><! --/col-md-4 -->
          
          </div><! -- END 3RD ROW OF PANELS -->

           <! -- 3RD ROW OF PANELS -->
          <!-- Product Panel -->
          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="product-panel-2 pn">
                <div class="badge badge-hot">HOT</div>
                <img src="assets/img/product.jpg" width="200" alt="">
                <h5 class="mt">Flat Pack Heritage</h5>
                <h6>TOTAL SALES: 1388</h6>
                <button class="btn btn-small btn-theme04">BUY</button>
              </div>
            </div><! --/col-md-4 -->


            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="product-panel-2 pn">
                <div class="badge badge-hot">HOT</div>
                <img src="assets/img/product.jpg" width="200" alt="">
                <h5 class="mt">Flat Pack Heritage</h5>
                <h6>TOTAL SALES: 1388</h6>
                <button class="btn btn-small btn-theme04">BUY</button>
              </div>
            </div><! --/col-md-4 -->


            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="product-panel-2 pn">
                <div class="badge badge-hot">HOT</div>
                <img src="assets/img/product.jpg" width="200" alt="">
                <h5 class="mt">Flat Pack Heritage</h5>
                <h6>TOTAL SALES: 1388</h6>
                <button class="btn btn-small btn-theme04">BUY</button>
              </div>
            </div><! --/col-md-4 -->
          
          </div><! -- END 3RD ROW OF PANELS -->
            </div>
          </div>
        </div>            
<!-- 
**********************************************************************************************************************************************************
MAIN CONTENT
***********************************************************************************************************************************************************
 -->     
              
        </section>
      </section>
      <!--main content end-->
  </section>
<!-- 
**********************************************************************************************************************************************************
MAIN CONTENT end
*********************************************************************************************************************************************************** 
-->
  <?php
  include 'script/tail_imp_file.php';
  include 'script/footer.php';
  ?>
  
  </body>
</html>
