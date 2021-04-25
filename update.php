<?php
include_once"db.php";
$subject_update=$gender_update=$user_id=$query=$result=$username=$user_edit_id=$password=$email=$gender=$subject=$city="";
if(!isset($_POST['submit'])){
	$user_id = $_GET['user_id'];
	$sql="SELECT*FROM curd_244 Where id='".$user_id."'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	$username = $result['username'];
	$password = $result['password'];
	$email = $result['email'];
	$gender = $result['gender'];
	$subject = explode(",",$result['subject']);
	$city = $result['city'];
	 mysqli_close($conn);
}
if(isset($_POST['submit'])){
	$username_update = $_POST['username'];
	$password_update = $_POST['password'];
	$email_update = $_POST['email'];
	$gender_update = $_POST['gender'];
	$subject_update = implode(" ",$_POST['subject']);
	//$subject_update = implode(" ",$_POST['subject']);//
	$city_update = $_POST['city'];
	$user_edit_id = $_POST['user_edit_id'];
	if($username_update!="" && $password_update!=""){
		$sql="UPDATE curd_244 SET username='".$username_update."',password='".$password_update."',email='".$email_update."',gender='".$gender_update."',subject='".$subject_update."',city='".$city_update."' where id='".$user_edit_id."'";
		if($conn->query($sql)===TRUE){
			header("location: home.php");
		}else{
			echo "error".$sql."</br>".$conn->error;
		}
		
	}else{
            echo "data is not founded";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1 style="text-align:center;">Update form</h1>
<form class="form-horizontal" action="update.php" method="post">
<input  class="form-horizontal"type="hidden" name="user_edit_id" id="user_edit_id" value=<?php echo $user_id;?>>
  <div class="form-group">
   <label class="control-label col-sm-2"for="username">Username</label>
   <div class="col-sm-10"> 
   <input class="form-control" type="text" name="username" value="<?php echo $username;?>">
  </div>
  </div>
  <div class="form-group">
   <label class="control-label col-sm-2" for="password">Password</label>
    <div class="col-sm-10">
	<input class="form-control" type="password" name="password" value="<?php echo $password;?>">
  </div>  
  </div> 
  <div class="form-group">
   <label class="control-label col-sm-2" for="email">email</label>
    <div class="col-sm-10">
	<input class="form-control" type="email" name="email" value="<?php echo $email;?>">
  </div>  
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>
   <div class="radio col-sm-2">
      <label><input type="radio" name="gender" value="male"<?php if($gender=="male"){ echo "checked";}?>>male</label>
   </div>
   <div class="radio col-sm-2">
      <label><input type="radio" name="gender" value="female"<?php if($gender=="female"){ echo "checked";}?>>female</label>
   </div>
   </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="subject">Subject:</label>
   <div class="checkbox col-sm-2">
      <label><input type="checkbox" name="subject[]" value="physics"<?php if(in_array("physics",$subject)){ echo "checked";}?>>physics</label>
   </div>
   <div class="checkbox col-sm-2">
      <label><input type="checkbox" name="subject[]" value="maths"<?php if(in_array("maths",$subject)){ echo "checked";}?>>maths</label>
   </div>
   <div class="checkbox col-sm-2">
      <label><input type="checkbox" name="subject[]" value="chem"<?php if(in_array("chem",$subject)){ echo "checked";}?>>chem</label>
   </div>
   <div class="checkbox col-sm-2">
      <label><input type="checkbox" name="subject[]" value="bio"<?php if(in_array("bio",$subject)){ echo "checked";}?>>bio</label>
   </div>
   </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="city">Select city:</label>
	  <div class="col-sm-10">
      <select class="form-control" id="city" name="city">
	    <option value="">Select city</option>
        <option <?php if($city=="lucknow"){ echo "selected";}?>>lucknow</option>
        <option <?php if($city=="kanpur"){ echo "selected";}?>>kanpur</option>
        <option <?php if($city=="gorakhpur"){ echo "selected";}?>>gorakhpur</option>
        <option <?php if($city=="benglore"){ echo "selected";}?>>benglore</option>
      </select>
	  </div>
   </div>
   <div class="align-self-end ml-auto text-right">
    <button type="submit" class="btn btn-success" name="submit">Update</button>
   </div>
</div>
</form>
</body>
</html>