<?php
session_start();
include 'database.php';



// echo $db;
if(isset($_POST['register']))
{
	// echo $_POST['uname'];
	// echo $db;
	NewUser($db);

}

function NewUser($db) { 
	
	//$fname = $_POST['fname'];
	//$mname = $_POST['mname'];
	//$lname = $_POST['lname'];
	$uname =  $_POST['uname'];
	$pass = $_POST['pass'];
	$passwordSecure=md5($pass);
	//var_dump($uname);
	//var_dump($pass);
	//var_dump($passwordSecure);
	//echo $uname;
	// //$email = $_POST['email'];
	// //$password = $_POST['pass'];
	// try{
		// $con= pg_connect("host=localhost dbname=todolist user=postgres password=postgres");
		//var_dump($db);
		//echo '<br>';
	//echo $uname, $pass, $passwordSecure;
		$query = "INSERT INTO list (uname,pass) VALUES ('$uname','$passwordSecure')";
		$sql="INSERT INTO task_list(id,done) VALUES('$uname',false)";
		//$sql="INSERT INTO task_list(id,done) VALUES('$uname',false)";

		//echo $query, $db;
		try{
			$result = pg_query($db,$query);
			$result1=pg_query($db,$sql);
		}catch(Exception $e)
		{
			echo $e;
		}
		//try{
			//$result1=pg_query($db,$sql);
		//}catch(Exception $f){
		//	echo $f;
		//}
		
		//var_dump($result);
			
		
		//var_dump($result);
		//var_dump($result1);
		pg_close($db);
		
	// 	echo $data;

	// }catch(Exception $e)
	// {
	// 	echo $e;
	// }
	

	// $data = pg_query($query) or echo pg_last_error();
	//  if($data) { 
	// 	echo "YOUR REGISTRATION IS COMPLETED..."; 
	// } 
	// else
	// {
	// 	echo "Failed";
	// }

}
?>

