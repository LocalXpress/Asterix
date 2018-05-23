<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
    include 'script/head_imp_file.php';
  ?>
  </head>

  <body onload="getTime()">

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
                
                <div class="col-lg-9 main-chart">
                    
 
                  <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> IMPORTANT MESSAGE 1</h4>
                    IMPORTANT MESSAGE 1
                  </div><!-- /showback -->

                  <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> IMPORTANT MESSAGE 2</h4>
                    IMPORTANT MESSAGE 1
                  </div><!-- /showback -->

                  <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> IMPORTANT MESSAGE 3</h4>
                    IMPORTANT MESSAGE 1
                  </div><!-- /showback -->

                  <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> IMPORTANT MESSAGE 4</h4>
                    IMPORTANT MESSAGE 1
                  </div><!-- /showback -->

                  <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> IMPORTANT MESSAGE 5</h4>
                    IMPORTANT MESSAGE 1
                  </div><!-- /showback -->


                		
					      </div>
                  
                  
           
                <div class="col-lg-3 main-chart"> 

                  <div class="showback">
                    <center><h4>TIME</h4></center>
                    <h4><div id="showtime_1" style="color:black;"></div></h4>
                  </div><!-- /showback -->

                </div>

              </div>
          </section>
      </section>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT END
      *********************************************************************************************************************************************************** -->
      <!--main content end-->
  </section>
  <?php
    include 'script/tail_imp_file.php';
  ?>	
    <script>
        function getTime()
        {
            var today = new Date();
            var date = today.getFullYear()+'-'+checkTime(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());
            var dateTime = "Today's Date: "+date+'<br> Now: '+time;
            document.getElementById('showtime_1').innerHTML=dateTime;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
  </body>
</html>
