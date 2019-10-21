<?php 
    include('../config/config.php');

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['name'];
        $tempat = $_POST['place'];
        $gender = $_POST['gender'];
        $fileName = $_FILES['avatar']['name'];
        $path = "../assets/images_profile/";
        $pathupload = "assets/images_profile/";
        $time = time();
        $newfile = $time."_".$fileName;
        $pathfile = $pathupload.$newfile;

        // echo $id.$nama.$tempat.$gender.$pathfile;


        $query = "UPDATE user SET nama='$nama',tempat_lahir='$tempat',jenis_kelamin='$gender',foto='$pathfile' WHERE id='$id'";
        $update = mysqli_query($conn,$query);
        if($update){
            move_uploaded_file($_FILES['avatar']['tmp_name'], $path.$newfile);
            echo "<script type='text/javascript'>window.location='../home.php';alert('Success Update Data');</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location='../home.php';alert('Failed Update Data');</script>";
        }
    }
?>