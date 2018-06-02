<?php
 	  session_start();
      $stud_id  =  $_SESSION['stud_id'];
      include 'script/head_imp_file.php';
      include 'script/tail_imp_file.php';
      include 'php/function_2.php';
      //echo $stud_id;
?>
<script type="text/javascript">
  function onload_required_function()
  {
    //Java script required for this page is written below
    this_page_info();
  }
  function this_page_info()
  {
      var student_details   =  <?php echo json_encode(get_student_details($stud_id), JSON_PRETTY_PRINT);?>;
      var subject_details   =  <?php echo json_encode(get_subject_details($stud_id), JSON_PRETTY_PRINT);?>;
      var picture_details	=  <?php echo json_encode(get_profile_picture($stud_id), JSON_PRETTY_PRINT);?>;

      profile_image.src 			= 	picture_details['0']['pic_url'];

      full_name.innerHTML           =   student_details['0']['fname']+' '+student_details['0']['mname']+' '+student_details['0']['lname'];
      registration_number.innerHTML =   student_details['0']['stud_id'];
      mother_name.innerHTML			=	student_details['0']['moth_name'];
      father_name.innerHTML			=	student_details['0']['fath_name'];
      email.innerHTML               =   student_details['0']['email'];  
      per_phone.innerHTML			=	student_details['0']['p_phone'];
      gar_phone.innerHTML			=	student_details['0']['g_phone'];
      addr.innerHTML             	=   student_details['0']['addr'];
      fee.innerHTML                 =   student_details['0']['fee'];
      teacher.innerHTML             =   student_details['0']['teacher'];
      school.innerHTML				=	student_details['0']['school'];
      board.innerHTML				=	student_details['0']['board'];
      clas.innerHTML				=	student_details['0']['class']
      subjects.innerHTML            =   subject_details['0']['sub_1']+' , '+subject_details['0']['sub_2']+' , '+subject_details['0']['sub_3']+' , '+subject_details['0']['sub_4']; 

  }
</script>

<style type="text/css">

	table, th, td 
	{
	    border: 1px solid black;
	    border-collapse: collapse;
	    font-size: 15px !important;
	    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	    color: black;
	}


	th, td 
	{
	    padding: 5px;
	    text-align: center;  
	    width: 500px;  
	}
	body
	{
		padding-left: 5% !important;
		padding-top: 3%	 !important;
		padding-right: 5%!important;
	}
	b
	{	color:#4c90ff;}

	h2,h4
	{
	    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	    color: black;
	}

	button
	{
		margin-top: 1%;
	}
	img
	{
		height: 150px; 
		width: 150px;
		margin-bottom: 1%;
		border-radius: 3px;
	}
</style>

<body onload='onload_required_function();' class="showback">
	<center><h2>*Asterix Education</h2></center>
	<hr>
	<h4>Student Profile</h4>
	<table>
		<tr>
			<td rowspan="6"><img id="profile_image" src=""/></td>
    		<td><b>Name: </b></td>
    		<td><div id='full_name'></div></td>
    		<td><b>Regisraion Number: </b></td>
    		<td><div id='registration_number'></div></td>
    		<td><b>Email ID: </b></td>
    		<td><div id='email'></div></td>
  		</tr>

  		<tr>
    		<td><b>Mother Name: </b></td>
    		<td colspan="2"><div id='mother_name'></div></td>
    		<td><b>Father Name: </b></td>
    		<td colspan="2"><div id='father_name'></div></td>
  		</tr>

  		<tr>
    		<td><b>Gardian Phone Number: </b></td>
    		<td colspan="2"><div id='per_phone'></div></td>
    		<td><b>Personal Phone Number: </b></td>
    		<td colspan="2"><div id='gar_phone'></div></td>
  		</tr>

  		<tr>
    		<td><b>Address: </b></td>
    		<td colspan="5"><div id='addr'></div></td>
  		</tr>

  		<tr>
    		<td><b>School: </b></td>
    		<td><div id='school'></div></td>
    		<td><b>Board: </b></td>
    		<td><div id='board'></div></td>
    		<td><b>Class: </b></td>
    		<td><div id='clas'></div></td>
  		</tr>

  		<tr>
    		<td><b>Subjects: </b></td>
    		<td><div id='subjects'></div></td>
    		<td><b>Teacher: </b></td>
    		<td><div id='teacher'></div></td>
    		<td><b>Total Fees(Per Month): </b></td>
    		<td><div id='fee'></div></td>
  		</tr>

	</table>
	<center><a href="http://pdf-ace.com/pdfme" target="_blank"><button type="button" class="btn btn-default btn-theme03 centered"><i class="fa fa-download"></i>  Save as PDF</button></a></center>

</body>