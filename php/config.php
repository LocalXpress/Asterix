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
?>