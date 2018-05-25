<?php
	try 
		{ 
			$db = new PDO("mysql:dbname=asterix_gold;host=localhost", "root", "" );
			//echo 'Hello I am conneted!!';
		}
	catch(PDOException $e)
		{ 
			alert($e->getMessage());
		}//db connection which is common for every page.

		//function for registration in the first page
		function registration_1($email,$fname,$mname,$lname,$password)
		{
			//a new value is inserted into the student_basic profile detail table
			$sql="insert into student_basic(email,fname,mname,lname,password) values
					('$email','$fname','$mname','$lname','$password')";
			$GLOBALS['db']->exec($sql);

			//the email ID is fetched from the last inserted value
			$sql="select stud_id from student_basic where email ='$email'";
			foreach ($GLOBALS['db']->query($sql) as $row){$stud_id=$row['stud_id'];}
			//echo 'Your Student ID is: '.$stud_id;

			/*the new value is inserted into the detail_profile table of the DB.Default value is set in the settings of the table.*/
			
			$sql="insert into student_pic(stud_id)values
				  ($stud_id)";
				  $GLOBALS['db']->exec($sql);
			//echo 'Student Pic Table is updated successfully<br>';

			$sql="insert into student_reg(stud_id)values
				  ($stud_id)";
				  $GLOBALS['db']->exec($sql);
			//echo 'Student reg Table is updated successfully<br>';

			$sql="insert into student_sub(stud_id)values
				  ($stud_id)";
				  $GLOBALS['db']->exec($sql);
			//echo 'Student sub Table is updated successfully<br>';
			header("location:./Student_Page_8.php?stud_id=".$stud_id); 
			//Transaction table will be updated once the first payment is initiated!
			//echo "Email: ".$email."Fname: ".$fname."Mname".$mname."Lname".$lname."password".$password;
			return 1;
		}
		//this function will be called for the second page of the registration
		function registration_2($stud_id,$moth_name,$fath_name,$g_phone,$p_phone,$board,$school,$class,$teacher,$sub_1,$sub_2,$sub_3,$sub_4,$addr,$fee)
		{
			$sql="update student_basic set moth_name 	=	'$moth_name',
									 	   fath_name	=	'$fath_name',
									 	   g_phone		=	'$g_phone',
									 	   p_phone		=	'$p_phone',
									 	   board 		=	'$board',
									 	   school		=	'$school',
									 	   class 		=	'$class',
									 	   teacher		=	'$teacher',
									 	   addr 		=	'$addr',
									 	   fee 			=	 $fee 		where stud_id=$stud_id";
			$GLOBALS['db']->exec($sql);

			$sql="update student_sub   set sub_1		=	'$sub_1',
										   sub_2		=	'$sub_2',
										   sub_3		=	'$sub_3',
										   sub_4		=	'$sub_4'	where stud_id=$stud_id";
			$GLOBALS['db']->exec($sql);
			header("location:./Student_Page_9.php?stud_id=".$stud_id);
		}

		function registration_3($stud_id,$file)
		{
			//code to upload the display pictures, the size checking and format checking have to be done.
			$target_dir = "./profilestudent/";
			$target_file = $target_dir.$stud_id.basename($file["update_display_pic"]["name"]);
			//echo 'Looks Good!<br>';
			//echo $target_file;
			move_uploaded_file($file["update_display_pic"]["tmp_name"], $target_file);
			//echo '<br>Moved. Check Folder!';
			$update_display_pic=$target_file;
			$sql="update student_pic set pic_url='$update_display_pic' where stud_id=$stud_id";
			$GLOBALS['db']->exec($sql);
			header("location:./Student_Page_10.php?stud_id=".$stud_id);
		}

		function registration_4($stud_id)
		{
			$txnid  = substr(hash('sha256', mt_rand() . microtime()), 0, 10);
			$sql	= "insert into student_tran (tran_id,stud_id,amount,paid_for) values
												('$txnid',$stud_id,500,'Once')";	
			$GLOBALS['db']->exec($sql);
			$sql	= "update student_reg set reg=1 where stud_id=$stud_id";
			$GLOBALS['db']->exec($sql);
			//echo "done";
			return 1;
		}

		function login_check($email,$password)
		{
			//echo $email.' '.$password;
			$sql="select stud_id from student_basic where email='$email' and password='$password'";
			$key=0;
			foreach($GLOBALS['db']->query($sql) as $row) $key++;
			if($key==1)
				return $row['stud_id'];
			else 
				echo "Compilation is wrong!";
		}

		function return_student_name($stud_id)
		{
			$sql="select fname,mname,lname from student_basic where stud_id=$stud_id";
			foreach ($GLOBALS['db']->query($sql) as $row) return $row;
		}

		
?>