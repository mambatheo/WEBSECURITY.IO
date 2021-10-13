
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style22.css">

	<meta charset="utf-8">
	<title>EMAIL VERIFICATION</title>
</head>
<body>
<div class="form-wrapper">
<form action="" method="POST">
	<h3>Verify Your Email</h3>
	<div class="form-item">
	<input type="email" name="email"  value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" required="required" placeholder="Enter your email" autofocus required></input> </div>
	<div class="button-panel">
    <input type="submit" class="button" title="Verify" name="login" value="Verify"></input>
    </div>
      <div class="reminder">   <p> Your Email is not verified  <a href="verifyEmail.php">Verify Email </a> </p></div>
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
