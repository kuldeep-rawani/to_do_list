<?php
session_start();
include("database.php");
//if(isset($_POST['actionadd'])){
    //add_task($db);
//}

    if($_SERVER["REQUEST_METHOD"]=="POST"){
      
      //$uname = $_POST['uname'];
	  //$pass = $_POST['pass'];
	  //$passwordSecure=md5($pass);
	  $task=$_POST['title1'];
    $uname=$_SESSION['uname'];

    //echo $uname;
    //var_dump($uname);
      //$uname=$_GET['uname'];
      //echo $task;
      //var_dump($uname);
      //var_dump($pass);
      //var_dump($task);
      
	  $query = "UPDATE task_list SET task='$task', done=TRUE WHERE id='$uname'"; 
    // echo $query;
		
			$result = pg_query($db,$query);
      if($result)
      {
        echo "success";
      }
      else
      {
        $error = pg_last_error($db);
        echo $error;
      }
		

   }

//var_dump($task);   
//var_dump($query);
//var_dump($title1);
// var_dump($result);
//var_dump($uname);
//var_dump($add_task);
   pg_close($db);


?>
