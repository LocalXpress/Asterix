<?php
  include 'php/function_php.php';
  $stud_id  =   $_SESSION['stud_id'];
  $fname    =   return_student_name($stud_id);
?>
<script type="text/javascript">
function info() 
{
  var name        = <?php echo json_encode(return_student_name($stud_id), JSON_PRETTY_PRINT);?>;
  fname.innerHTML = name['fname']+' '+name['mname']+' '+name['lname'];
}
</script>
<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><div id="fname"></div></h5>
              
                  <li class="mt">
                      <a class="active" href="Student_Page_1.php">
                          <i class="fa fa-home"></i>
                          <span>Wall</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="active" href="Student_Page_2.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Profile</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="active" href="Student_Page_3.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Pay</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="active" href="Student_Page_4.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Market Place</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="active" href="Student_Page_5.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Contact</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a class="active" href="Student_Page_6.php">
                          <i class="fa fa-dashboard"></i>
                          <span>FAQ</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->