<?php

session_start();



if(isset($_SESSION['username'])) {
  header('Location: ../views/dashboard.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  
if (empty($username && $password)) {
  
  echo "Username or password field is required.";
} else {
  echo "<font color='red'>আপনি ভুল তথ্য দিয়েছেন। সঠিক ইউজার নেম আর পাসওয়ার্ড দিয়ে আবার চেষ্টা করুণ</font>";

}

  
  $conn = mysqli_connect('localhost', 'root', '', 'tamim');
  

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('Location: ../views/dashboard.php');
  } else {
     }

  
}
?>