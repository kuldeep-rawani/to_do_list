<?php
include ("database.php");
function deletion($id,$title,$description){
	$sql=DELETE FROM LIST where ID=$id;

}
$ret=pg_query($sql);
if(!$ret){
	echo "error:"pg_last_error(); 
}
else{
	echo "successfully deleted";
	header('location:index.php');
}

?>