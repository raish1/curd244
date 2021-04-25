<?php
include_once"db.php";
if(!isset($_POST['submit'])){
	$user_id = $_GET['user_id'];
	$sql="Delete from curd_244 where id='".$user_id."'";
	if(mysqli_query($conn,$sql)){
		header("location: home.php");
	}else{
		echo "deleting editing record".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>