<?php
session_start();


require_once('connection.php');


if (isset($_POST['submit'])) {
  //$username=$_SESSION['username'];
  //  $password=$_SESSION['pwd'];
    $email=$_SESSION['em'];
    $code=$_POST['code'];

    
   $query = "SELECT * FROM users WHERE code=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i',$code);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
      
      $query = "UPDATE users SET status='Verified' WHERE email=? ";
  $stmti = $conn->prepare($query);
$stmti->bind_param('s',$email);
$stmti->execute();
$stmti->close();
header('location:index.php');

    }
  else{
    echo "Wrong activation code ";
  }

  }






?>