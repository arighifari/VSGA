<?php 
    include('config/config.php');

    if (isset($_POST['submit'])) {
        $kategori = $_POST['nama'];

        $query = "INSERT into data_kategori (nama_Kategori) values ('$kategori')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            echo "<script type='text/javascript'>window.location='index.php';alert('Success Insert Data Into Database');</script>";
        }
    }
?>