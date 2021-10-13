<?php 
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$m=0;
	include("connection.php");
	$sql="select* from users where email=?";
$mamba= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($mamba,$sql)) {
 echo "Error!";
}
else{
  mysqli_stmt_bind_param($mamba,"s",$email);
  mysqli_stmt_execute($mamba);
  $select=mysqli_stmt_get_result($mamba);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['email']==$email)
    {
    $m=$m+1;
    $web=$row['email'];
}
  }
}
  if($m>=1){
	$take=bin2hex(random_bytes(16));
	$token=random_bytes(32);
		$url="http://localhost/web/reset.php?take=$take";
		
     $sql="delete from passwords_store where email=?";
     $mamba= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($mamba,$sql)) {
 echo "Error!";
}
else{
  mysqli_stmt_bind_param($mamba,"s",$email);
  mysqli_stmt_execute($mamba);
}
$lqs="insert into passwords_store(email,take) values(?,?)";
$mamba= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($mamba,$lqs)) {
 echo "Error!";
}
else{
	
  mysqli_stmt_bind_param($mamba,"ss",$email,$take);
  mysqli_stmt_execute($mamba);
}
//mysqli_stmt_close($mamba);
$from = 'mutheogene61@gmail.com';
$to = $email;
$subject = 'Password Recovery';
$message = '<p>Open this link</p>';
$message .= '<a href="'.$url.'</a></p>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);
echo"<h1>Go and Verify Your Email<h1>";
}
else{
	header("location:forgot.php?found=success");
}
}
?>