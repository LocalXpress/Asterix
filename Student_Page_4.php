<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'script/head_imp_file.php';
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

              <div class="row">
                <div class="col-lg-12 main-chart">
                  <h4>Class Schedule</h4><hr>

                  <div class="showback">
                    <h5>Lecture Hall 1</h5>

                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>
                  </div>

                  <div class="showback">
                    <h5>Lecture Hall 2</h5>

                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>


                  </div>                  

              </div>
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- 
  **********************************************************************************************************************************************************
    MAIN CONTENT end
  *********************************************************************************************************************************************************** -->
  <?php
  include 'script/tail_imp_file.php';
  include 'script/footer.php';
  ?>
  
  </body>
</html>
