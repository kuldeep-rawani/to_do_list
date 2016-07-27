<?php
session_start();
$host="host=127.0.0.1";
$port="port=5432";
$dbname="dbname=todolist";
 $credentials = "user=postgres password=postgres";
  $db=pg_connect("$host $port $dbname $credentials") or die('Could not connect: ' . pg_last_error());
 //$db= pg_connect("host=localhost dbname=todolist user=postgres password=postgres");
 if(!$db){

    //echo "could not connect to the database";
 }
 else{
 		
     //echo "connect to database";
 }
