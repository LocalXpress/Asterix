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
    //this is the function used by the side_name
    info(); 
    //Java script required for this page is written below
    this_page_info();
  }
  function this_page_info()
  {
      var student_details   =  <?php echo json_encode(get_student_details($stud_id), JSON_PRETTY_PRINT);?>;
      var subject_details   =  <?php echo json_encode(get_subject_details($stud_id), JSON_PRETTY_PRINT);?>;

      full_name.innerHTML           =   student_details['0']['fname']+' '+student_details['0']['mname']+' '+student_details['0']['lname'];
      registration_number.innerHTML =   student_details['0']['stud_id'];
      email.innerHTML               =   student_details['0']['email'];  
      phone_number.innerHTML        =   student_details['0']['g_phone']+' / '+student_details['0']['p_phone'];
      school.innerHTML              =   student_details['0']['school']+' ('+student_details['0']['board']+') <b>Class:</b> '+student_details['0']['class']; 
      address.innerHTML             =   student_details['0']['addr'];
      fee.innerHTML                 =   student_details['0']['fee'];
      teacher.innerHTML             =   student_details['0']['teacher'];
      subjects.innerHTML            =   subject_details['0']['sub_1']+' , '+subject_details['0']['sub_2']+' , '+subject_details['0']['sub_3']+' , '+subject_details['0']['sub_4']; 

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
            <h3><i class="fa fa-angle-right"></i> STUDENT PROFILE</h3><hr>
              <div class="row mt">

                <div class="col-lg-3 main-chart">
                  <div class="showback">
                    <p class="centered"><img src="assets/img/ui-zac.jpg" class="img-circle" width="155"></p>
                    <p class="centered">
                      <button type="button" class="btn btn-default btn-xs btn-theme02">View Profile</button>
                      <button type="button" class="btn btn-default btn-xs btn-theme03">Transaction History</button>
                    </p>
                  </div>
                </div>

                <div class="col-lg-9 main-chart">
                  <div class="showback">
                    <!--Table-->
                      <table class="table table-bordered">
                      <!--Table body-->
                      <tbody>

                          <tr>
                              <th colspan = "1"><b style="color:#4c90ff;">FULL NAME</b></th>
                              <td colspan = "2"><div id="full_name"></div></td>
                              <td colspan = "1"><b style="color:#4c90ff;">REG ID: </b></td>
                              <td colspan = "2"><div id="registration_number"></div></td>
                          </tr>

                          <tr>
                              <td  colspan  = "1"><b style="color:#4c90ff;">Email ID</b></td>
                              <td  colspan  = "2"><div id="email"></div></td>
                              <td  colspan  = "1"><b style="color:#4c90ff;">Contact Details</b></td>
                              <td  colspan  = "2"><div id="phone_number"></div></td>
                          </tr>
                          <tr>
                              <td  colspan  = "1"><b style="color:#4c90ff;">Subjects</b></td>
                              <td  colspan  = "2"><div id="subjects"></div></td>
                              <td  colspan  = "1"><b style="color:#4c90ff;">School & Board</b></td>
                              <td  colspan  = "2"><div id="school"></div></td>
                          </tr>
                          <tr>
                              <td  colspan  = "1"><b style="color:#4c90ff;">Address</b></td> 
                              <td  colspan  = "4"><div id="address"></div></td>
                          </tr>
                          <tr>
                              <td  colspan  = "1"><b style="color:#4c90ff;">Instructor</b></td>
                              <td  colspan  = "2"><div id="teacher"></div></td>
                              <td  colspan  = "1"><b style="color:#4c90ff;">Total Fees</b></td>
                              <td  colspan  = "2"><div id="fee"></div></td>
                          </tr>
                      </tbody>
                      <!--Table body-->

                  </table>
                  <!--Table-->
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
                                    <th class="numeric">Amount</th>
                                    <th class="numeric">Paid for</th>
                                    <th class="numeric">Time</th>
                                </tr>
                              </thead>

                              <tbody>

                              <?php get_student_tran($stud_id); ?>
                    
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
      include 'script/footer.php';
      include 'script/tail_imp_file.php';
    ?>
  </body>
</html>
