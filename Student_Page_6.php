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
                <h4 style="margin-left:1%;">FAQ & Privacy Policies</h4><hr style="margin-left:1%;">
                <div class="col-lg-12 main-chart">
                  <div class="showback">
                    <h4>Privacy Policies and disclaimers and important questions will be answered here!</h4><br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
