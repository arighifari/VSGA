<?php
include('../config/config.php');
// session_start();

if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

        $login = mysqli_query($conn,"SELECT * FROM tb_user WHERE email='$email'");
        $num_rows = mysqli_num_rows($login);

        if($num_rows != 0) {
            $fetch = mysqli_fetch_assoc($login);
            $dbemail = $fetch['email'];
            $dbnama = $fetch['nama'];
            $dbpass = $fetch['password'];
            $pass_verify = password_verify($dbpass,$fetch['password']); 
            if(password_verify($pass, $dbpass)) {
            //   $_SESSION['admin'] = $dbnama;
            //   $_SESSION['id'] = $dbid;
              echo "<script type='text/javascript'>window.location='../index.php';alert('Welcome Back $dbnama');</script>";
            }
             else {
              echo "<script type='text/javascript'>window.location='../login.php';alert('Wrong Email or Password');</script>";
            }
          } else {
            echo "<script type='text/javascript'>window.location='../login.php';alert('Email Not Exist');</script>";
          }
        }
?>