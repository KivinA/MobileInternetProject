<?php 
    include 'config.php';
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);
        $confpass = mysqli_real_escape_string($conn, $_POST['confirm']);
        if ($pass != confpass)
        {
            print 'Passwords do not match!';
        }
    }
?>