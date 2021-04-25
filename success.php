<?php
require"db.php";
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$subject = implode(",",$_POST['subject']);
	$city = $_POST['city'];
	if($username!="" && $password!=""){
		$sql="INSERT INTO curd_244(`username`,`password`,`email`,`gender`,`subject`,`city`)
		    VALUES('".$username."','".$password."','".$email."','".$gender."','".$subject."','".$city."')";
		if($conn->query($sql)===TRUE){
			header("location: home.php");
		}else{
			echo "error".$sql."</br>".$conn->error;
		}
		$conn->close();
	}else{
		echo "data is not founded";
	}
}
?>