<?php
include ("database.php");

function add($id,$title,$description){

    $sql=INSERT INTO LIST(ID,TITLE,DESCRIPTION)values($id,$title,$description);
     
    $ret=pg_query($sql);

    if(!ret){
    	echo "error:"pg_last_error();
    }
    else{
    	echo "inserted successfully";
    	header('location:index.php');
    } 

}

?>