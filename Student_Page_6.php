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

              <div class="row">
                <h4 style="margin-left:1%;">FAQ & Privacy Policies</h4><hr style="margin-left:1%;">
                <div class="col-lg-12 main-chart">
                  <div class="showback">
                    <h4>Privacy Policies and disclaimers and important questions will be answered here!</h4><br>
                    
                    <div class="panel-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" href="#collapse1">Collapsible panel 1</a></h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                          <div class="panel-body">Panel Body</div>
                        </div>
                      </div>
                    </div>

                    <div class="panel-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" href="#collapse2">Collapsible panel 2</a></h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body">Panel Body</div>
                        </div>
                      </div>
                    </div>

                    <div class="panel-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" href="#collapse3">Collapsible panel 3</a></h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                          <div class="panel-body">Panel Body</div>
                        </div>
                      </div>
                    </div>

                    <div class="panel-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" href="#collapse4">Collapsible panel 4</a></h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                          <div class="panel-body">Panel Body</div>
                        </div>
                      </div>
                    </div>

                    <div class="panel-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" href="#collapse5">Collapsible panel 5</a></h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                          <div class="panel-body">Panel Body</div>
                        </div>
                      </div>
                    </div>




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
  </body>
</html>
