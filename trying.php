<?php
session_start();
include("database.php");



 if($_SERVER["REQUEST_METHOD"] == "POST") {

    $userName=trim($_POST["uname"]);
    $password=trim($_POST["pass"]);
    $sql="SELECT uname and pass FROM list WHERE uname='$Username' AND pass='$passwordSecure'";
    $result=pg_query($db,$sql);

    if(pg_fetch_result($results, $uname, "userName")==true 
       && pg_fetch_result($results, $pass, "userName")==true) {
        setcookie("userIDforDV", $userName, time()+43200);
    }
    else {
        $error = "Your username and or password is incorrect";
    }

}

$userName = $_COOKIE['userIDforDV'];

if(isset($userName) && $userName!="") {
    echo "Welcome " . $userName;
}

echo $error;

?>
