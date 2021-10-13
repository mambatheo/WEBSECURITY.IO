<?php
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style11.css">
	<meta charset="utf-8">
	<title>
		RESET PASSWORD
	</title>
</head>
<body><?php
$take=$_GET['take'];
if(empty($take)){
	echo"We are unable to get your request";}

else{

?>
<h3>Password Recovery</h3>
<div class="form-wrapper">
	<form action="recovery.php" method="POST">
		<div class="form-item">
	<input type="PASSWORD" name="password" placeholder="Password Here" required>
	<input type="PASSWORD" name="confirm" placeholder="Confirm Password" required>
	<input type="hidden" name="take" value="<?php echo $take;?>">
</div>
<div class="button-panel"><input type="submit" name="submit" value="Submit"></div>
	</form></div>

</body>
</html>
<?php 
}
?>