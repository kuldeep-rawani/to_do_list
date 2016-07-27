<?php
session_start();
include("database.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    	$Username=pg_escape_string($db,$_POST['uname']);
    	$password=pg_escape_string($db,$_POST['pass']);
    	$passwordSecure=md5($password);
        // echo $Username, $password, $passwordSecure;
    	$sql="SELECT uname,pass FROM list WHERE uname='$Username' AND pass='$passwordSecure'";
    	$result=pg_query($db,$sql);
        //var_dump($result);
        // $row=pg_fetch_row($result);
        // var_dump($row);
    	//setcookie("uname",$Username,time()+3600);
        
      
    	$count=pg_num_rows($result);
        //echo $count;
        
     	if($count==1){
            
 		//session_register("Username");
        $_SESSION['uname']=$Username;
     	header("location:welcome.php");

            
     	}
     
    
     	else{
     		//header('location:permission.php');
             echo "not a valid username or password";
     	}
    }



?>
