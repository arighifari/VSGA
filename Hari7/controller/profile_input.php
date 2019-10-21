<?php 
    include('../config/config.php');

    if (isset($_POST['submit'])) {
        $nama = $_POST['name'];
        $tempat = $_POST['place'];
        $gender = $_POST['gender'];
        $fileName = $_FILES['avatar']['name'];
        $path = "../assets/images_profile/";
        $pathupload = "assets/images_profile/";
        $time = time();
        $newfile = $time."_".$fileName;
        $pathfile = $pathupload.$newfile;
        

        $query = "INSERT into user (nama,tempat_lahir,jenis_kelamin,foto) values ('$nama','$tempat','$gender','$pathfile')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            move_uploaded_file($_FILES['avatar']['tmp_name'], $path.$newfile);
            echo "<script type='text/javascript'>window.location='../home.php';alert('Success Insert Data Into Database');</script>";
        }
    }
?>