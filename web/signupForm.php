

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style33.css">

		<meta charset="utf-8">
	<title>SignUp Form</title>
</head>
<body>
	<h3>Register Here</h3>
<div class="form-wrapper">
<form action="signup.php" method="POST">
	
	<div class="form-item"><input type="text" name="fname" required="required" placeholder="Fist Name" autofocus required></input></div>
	
	<div class="form-item"><input type="text" name="lname" required="required" placeholder="Last Name" autofocus required></input></div>
	
	<div class="form-item">

		<input type="email" name="email" required="required" placeholder="Email" autofocus required></input></div>
	
	<div class="form-item"><input type="text" name="uname" required="required" placeholder="Username" autofocus required></input></div>
	
	<div class="form-item"><input type="password" name="pwd" placeholder="Password"  id="eye"autofocus required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" name="psw" required>
			 </div><input type="checkbox" onclick="myFunction()">Show Password
	
	<div class="button-panel">
		<input type="submit" class="button" title="Register" name="signup" value="signup"></input>
    </div>
  <div class="reminder">
    <p>Have an account? <a href="index.php">Login Here</a></p></div>
    
  
</form>
</div>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("eye");
  if (x.type === "password") {
    x.type = "password";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>