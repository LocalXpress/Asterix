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

      if(isset($_POST['update_password']))
        update_password($stud_id,$_POST['n_password'],$_POST['c_password']);

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
      var picture_details   =  <?php echo json_encode(get_profile_picture($stud_id), JSON_PRETTY_PRINT);?>;

      profile_image.src             =   picture_details['0']['pic_url'];

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

  function redirect_profile()
  {
    window.open("profile.php", '_blank');
  }
  function redirect_transaction()
  {
    window.open("transaction.php",'_blank');
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
                    <p class="centered"><img id="profile_image"  src="" width="210" height="155" alt="Profile Picture"></p>
                    <p class="centered">
                      <button type="button" class="btn btn-default btn-xs btn-theme02" onclick="redirect_profile();">View Profile</button>
                      <button type="button" class="btn btn-default btn-xs btn-theme03" onclick="redirect_transaction();">Transaction History</button>
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
                  </table>
                  </div>
                </div>
              </div> 
<!--
*************************************************************************************************************************************************
UPDATION OF INFORMATION WILL BE DONE HERE
*************************************************************************************************************************************************  
-->
              <div class="showback">
                <h4> Information Updation </h4>

                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#password">Password Update</button>
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#contact" disabled>Contact Information Update</button>
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#subject_info" disabled>Subject Information Update</button>

                <div id="password" class="collapse">
                  <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      
                      <div class="col-sm-4" style="margin-top:1%;">
                        <input type="password" class="form-control" placeholder="New Password"  id="n_password"        name="n_password"     value=""/>
                      </div>

                      <div class="col-sm-4" style="margin-top:1%;">
                        <input type="password" class="form-control" placeholder="Confirm Password"  id="c_password"        name="c_password"     value=""/>
                      </div>

                      <div class="col-sm-4" style="margin-top:1%;">
                        <input type="reset" class="btn btn-default"   value="RESET"/>
                        <input type="submit" class="btn btn-primary"  value="UPDATE" id="submit" name="update_password"/>
                      </div>

                    </div>
                  </form>
                </div>

                <div id="contact" class="collapse">
                    Personal Phone Number/Gardian Phone Number and Address Updation is put here
                </div>

                <div id="subject_info" class="collapse">
                    Subject Information will be put here
                </div>


              </div> 
<!--
*************************************************************************************************************************************************
UPDATION OF INFORMATION WILL END HERE
*************************************************************************************************************************************************  
-->
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
