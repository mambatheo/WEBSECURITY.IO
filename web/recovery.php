<?php 
if (isset($_POST['submit'])) {
	$take=$_POST['take'];
  $m=0;
	
	$password=$_POST['password'];
	$confirm=$_POST['confirm'];
	
	if ($password!=$confirm) {
    echo '<script>';
echo 'alert("Password Unmatch!");';
echo "\n";
  
header("location:reset.php?take=$take");
echo '</script>';


  
	}
	
	require "connection.php";
$sql="select* from passwords_store where take=?";
$mamba= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($mamba,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($mamba,"s",$take);
  mysqli_stmt_execute($mamba);
  $select=mysqli_stmt_get_result($mamba);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['take']==$take)
    {
    $m=$m+1;
    $taken=$row['email'];
}
  }
  if ($m<1) {
 echo "you need to re submit".$take;
  }
  else
  {
$sql="select* from passwords_store where email=?";
$mamba= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($mamba,$sql)) {
 echo "Error!";
}
else{
  mysqli_stmt_bind_param($mamba,"s",$taken);
  mysqli_stmt_execute($mamba);
  $select=mysqli_stmt_get_result($mamba);
  if (!$row=mysqli_fetch_assoc($select)) {
  	echo "Error!!!";
  }
  else
  {
  $sql="UPDATE users set pwd=? where email=?";
  $mamba= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($mamba,$sql)) {
 echo "Error!!";
}
else{
	$confir=sha1($confirm);
  mysqli_stmt_bind_param($mamba,"ss",$confir,$taken);
  mysqli_stmt_execute($mamba);

  $sql="delete from passwords_store where email=?";
     $mamba= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($mamba,$sql)) {
 echo "Error!!";
}
else{
  mysqli_stmt_bind_param($mamba,"s",$taken);
  mysqli_stmt_execute($mamba);
  header("location:index.php");
}	
  }

  	}
}
}}}
else
{
	header("location:index.php");
}
?>