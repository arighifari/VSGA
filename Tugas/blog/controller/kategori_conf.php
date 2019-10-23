<?php 
    include('../config/config.php');

    if (isset($_POST['submit'])) {
        $nama = mysqli_real_escape_string($conn,$_POST['kategori']);

        $query = "INSERT into tb_kategori (name) values ('$nama')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            echo "<script type='text/javascript'>window.location='../index.php';alert('Success Insert Into Database');</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location='../index.php';alert('Failed Insert Into Database');</script>";
        }
    }
?>