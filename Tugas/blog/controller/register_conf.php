<?php 
    include('../config/config.php');

    if (isset($_POST['signup'])) {
        $nama = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = mysqli_real_escape_string($conn,$_POST['pass']);
        $pass = md5($pass);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $fileName = mysqli_real_escape_string($conn,$_FILES['foto']['name']);
        $path = "../assets/images_profile/";
        $pathupload = "assets/images_profile/";
        $time = time();
        $newfile = $time."_".$fileName;
        $pathfile = $pathupload.$newfile;

        // $hash = password_hash($pass,PASSWORD_DEFAULT); 
        

        $query = "INSERT into tb_user (email,name,password,foto,tlp) values ('$email','$nama','$pass','$pathfile','$phone')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            move_uploaded_file($_FILES['foto']['tmp_name'], $path.$newfile);
            echo "<script type='text/javascript'>window.location='../index.php';alert('Success Register');</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location='../login.php';alert('Failed Register');</script>";
        }
    }
?>