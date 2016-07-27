<?php
include ("database.php");
function updation($id,$title,$description){

      $sql=UPDATE LIST SET TITLE=$title and DESCRIPTION=$description where ID=$id;
      $ret=pg_query($sql);
      if(!ret){
      	echo "error:"pg_last_error();
      }
      else{
      	echo "successfully upadated";
      	header('location:index.php');
      }


}



?>