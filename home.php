<?php
require"db.php";
$result=$conn->query("SELECT*FROM curd_244");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
   <div class='col-sm-6 col-lg-6'>
			<h4><b>Users</b></h4>
		</div>
		<div class='col-sm-6 col-lg-6 right'>
			<a href="index.php" class="btn btn-primary pull-right" role="button">Add User</a>
		</div>
	</div>
	<div class="row">
	   <table class="table table-hover">
			<tr>
			  <td>username</td>
			  <td>password</td>
			  <td>email</td>
			  <td>gender</td>
			  <td>subject</td>
			  <td>city</td>
			  <td>update</td>
			  <td>delete</td>
			</tr>
   <?php while($row=mysqli_fetch_array($result)){?>
    <tr>
	  <td><?php echo $row['username'];?></td>
	  <td><?php echo $row['password'];?></td>
	  <td><?php echo $row['email'];?></td>
	  <td><?php echo $row['gender'];?></td>
	  <td><?php echo $row['subject'];?></td>
	  <td><?php echo $row['city'];?></td>
	  <td><a href="update.php?user_id=<?php echo $row['id'];?>"/>edit</a></td>
	  <td><a href="delete.php?user_id=<?php echo $row['id'];?>"/>delete</a></td>
	</tr>
   <?php }?>
   </table>
   </div>
  </div>
</body>
</html>