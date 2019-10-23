<?php
include('../config/config.php');
session_start();

if(isset($_POST['signin'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $pass = md5($pass);


        $login = mysqli_query($conn,"SELECT * FROM tb_user WHERE email='$email'");
        $num_rows = mysqli_num_rows($login);

        if($num_rows != 0) {
            $fetch = mysqli_fetch_assoc($login);
            $dbemail = $fetch['email'];
            $dbnama = $fetch['name'];
            $dbpass = $fetch['password'];
            $_SESSION['nama'] = $dbnama;
            $_SESSION['id'] = $dbemail;
            echo "<script type='text/javascript'>window.location='../index.php';alert('Welcome Back $dbnama');</script>";
          } else {
            echo "<script type='text/javascript'>window.location='../login.php';alert('Wrong Email or Password');</script>";
          }
        }
?>