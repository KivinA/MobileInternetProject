<?php
 include 'config.php';
 session_start();
 
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
    $sql = "SELECT USE_id FROM tblUser WHERE USE_email = '$email' AND USE_password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    if ($count == 1)
    {
       header("location: ../home.html");
    } else
    {
     $error = 'Your email or password is invalid';
    }
    
 }
?>