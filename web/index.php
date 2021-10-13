
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style22.css">

	<meta charset="utf-8">
	<title>login details</title>
</head>
<body>
<div class="form-wrapper">
<form action="login.php" method="POST">
	<h3>Login Here</h3>
	<div class="form-item">
	<input type="text" name="uname"  value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" required="required" placeholder="Username" autofocus required></input> </div>
	<div class="form-item">
	<input type="password" name="pwd" id="eye" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>" required="required" placeholder="Password" required></input></div>
		<div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
    
    <div class="rem">
  	<input type="checkbox"  name="remember" >
<label > Remember me</label>
<div id="showpswd"><input type="checkbox" onclick="myFunction()">
  <b>Show Password</b>
</div>
  </div>
  <div class="forgot">
  	<a href="forgot.php"> Password forgotten?</a>
  </div>
  <div class="reminder">
   <p> Have you not yet registered?  <a href="signupForm.php">Register Now </a> </p></div>
   </div>   
</form>
</div>

<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("eye");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
