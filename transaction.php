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

      full_name.innerHTML           =   
      '<b>Reg Number: </b>'+ +student_details['0']['stud_id'] +'<br><b>NAME: </b>'+ 
      student_details['0']['fname']+' '+student_details['0']['mname']+' '+student_details['0']['lname']+' ('+student_details['0']['p_phone']+')';
  }
</script>

<style type="text/css">

	table, th, td 
	{
	    border: 1px solid black;
	    border-collapse: collapse;
	    font-size: 15px !important;
	    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
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
	<h4>Transaction History</h4>
  <div class="alert alert-success">
    <div id='full_name'></div>
  </div>
	<table>
    <thead style="background-color:#002b80; color:white;">
      <tr>
        <th class="numeric">Order ID</th>
        <th class="numeric">Amount</th>
        <th class="numeric">Paid for</th>
        <th class="numeric">Time</th>
      </tr>
    </thead>
		<?php get_student_tran_total($stud_id); ?>
	</table>
	<center><a href="http://pdf-ace.com/pdfme" target="_blank"><button type="button" class="btn btn-default btn-theme03 centered"><i class="fa fa-download"></i>  Save as PDF</button></a></center>

</body>