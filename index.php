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
<h1 style="text-align:center;">This is my First Page</h1>
<form class="form-horizontal" action="success.php" method="post">
<div class="form-group">
  <div class="row">
    <label class="control-label col-sm-2" for="username">Username:</label>
	<div class="col-sm-10">
	  <input type="text" name="username" class="form-control" id="username" placeholder="username">
	</div> 
  </div>	
</div>
<div class="form-group">
 <div class="row">
  <label class="control-label col-sm-2" for="passwerd">Password:</label>
 <div class="col-sm-10">
 <input class="form-control" type="password" name="password" id="password" value="" placeholder="password">
 </div>
</div>
</div>
<div class="form-group">
  <div class="row">
  <label class="control-label col-sm-2" for="email">Email:</label>
  <div class="col-sm-10">
  <input class="form-control" type="email" name="email" id="email"placeholder="email">
  </div>
</div>
</div>
<div class="form-group">
   <label class="control-label col-sm-2" for="gender">Gender:</label>
<div class="radio col-sm-2">
      <label><input type="radio" name="gender" value="male">male</label>
</div>
<div class="radio col-sm-2">
      <label><input type="radio" name="gender" value="female">female</label>
</div>
</div>
<div class="form-group">
   <label class="control-label col-sm-2" for="subject">Subject:</label>
<div class="checkbox col-sm-2">
      <label><input type="checkbox" name="subject[]" value="physics">physics</label>
</div>
<div class="checkbox col-sm-2">
      <label><input type="checkbox" name="subject[]" value="maths">maths</label>
</div>
<div class="checkbox col-sm-2">
      <label><input type="checkbox" name="subject[]" value="chem">chem</label>
</div>
<div class="checkbox col-sm-2">
      <label><input type="checkbox" name="subject[]" value="bio">bio</label>
</div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="city">Select city:</label>
	  <div class="col-sm-10">
      <select class="form-control" id="city" name="city">
	    <option value="">Select city</option>
        <option>lucknow</option>
        <option>kanpur</option>
        <option>gorakhpur</option>
        <option>benglore</option>
      </select>
	  </div>
</div>
<div class="col-sm-4 col-md-4 col-lg-4 ">
    <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
</div>
<div class="col-sm-8 col-md-8 col-lg-8">
	<a href="home.php" class="btn btn-primary " role="button">Cancel</a>
</div>
</form>
</div>
</body>
</html>