
<?php
session_start();
include 'connection.php';
$uname=$_POST["uname"];
$pwd=sha1($_POST["pwd"]);
   $sql = "select *from users where uname = '$uname' and pwd = '$pwd'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
        if($count == 1){  
         $query = "SELECT * FROM users WHERE status='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){


           header("location:homepage.php");
           
            if(!empty($_POST["remember"])) {
            setcookie ("uname",$_POST["uname"],time()+ 3600);
            setcookie ("pwd",$_POST["pwd"],time()+ 3600);
           
            }
            $_SESSION['name']=$uname;
            $_SESSION['pass']=$pwd; 
       }
       else{
         header("location:verifyLogin.php");
       }


        }  
        else{  
            echo "<script> alert(' Invalid Username or Password') </script>";  
        } 

?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="style44.css">
   <meta charset="utf-8">
   <title></title>
</head>
<body><div class="form-wrapper">
<div class="reminder">
    <h1>Try again <a href="index.php">Login Here</a></h1></div></div>
</body>
</html>