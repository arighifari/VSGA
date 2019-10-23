<?php 
    include('../config/config.php');


    if (isset($_POST['submit'])) {
        $judul = mysqli_real_escape_string($conn,$_POST['judul']);
        $isi = mysqli_real_escape_string($conn,$_POST['isi']);
        $kategori = mysqli_real_escape_string($conn,$_POST['kategori']);
        $tag = mysqli_real_escape_string($conn,$_POST['tag']);
        $fileName = mysqli_real_escape_string($conn,$_FILES['foto']['name']);
        $path = "../assets/images_article/";
        $pathupload = "assets/images_article/";
        $time = time();
        $newfile = $time."_".$fileName;
        $pathfile = $pathupload.$newfile;

        // $hash = password_hash($pass,PASSWORD_DEFAULT); 
        

        $query = "INSERT into tb_post (date,title,content,gambar,tag,id_kategori) values (now(),'$judul','$isi','$pathfile','$tag','$kategori')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            move_uploaded_file($_FILES['foto']['tmp_name'], $path.$newfile);
            echo "<script type='text/javascript'>window.location='../index.php';alert('Success Insert Into Database');</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location='../index.php';alert('Failed Insert Into Database');</script>";
        }
    }
?>