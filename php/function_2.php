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

		function get_student_details($stud_id)
		{
			//fetch all can fetch multiple row
			$sql =	$GLOBALS['db']->prepare("select * from student_basic where stud_id=$stud_id");
			$sql->execute();
			$result = $sql->fetchAll();
			return $result;
		}

		function get_subject_details($stud_id)
		{
			//fetch all can fetch multiple row
			$sql =	$GLOBALS['db']->prepare("select * from student_sub where stud_id=$stud_id");
			$sql->execute();
			$result = $sql->fetchAll();
			return $result;
		}

		function get_student_tran($stud_id)
		{
			//fetch all can fetch multiple row
			$sql 	=	"select * from student_tran where stud_id=$stud_id order by t_id limit 3";
			foreach($GLOBALS['db']->query($sql) as $row)
			{
    			echo "<tr>";
    			echo "<td>".$row['tran_id']."</td>";
    			echo "<td>".$row['amount']."</td>";
    			echo "<td>".$row['paid_for']."</td>";
    			echo "<td>".$row['time']."</td>";
    			echo "</tr>";
			}
		}
?>