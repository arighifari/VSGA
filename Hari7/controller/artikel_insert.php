<?php 
    include('../config/config.php');

    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];


        $query = "INSERT into artikel (judul,isi) values ('$judul','$isi')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            move_uploaded_file($_FILES['avatar']['tmp_name'], $path.$newfile);
            echo "<script type='text/javascript'>window.location='../artikel.php';alert('Success Insert Data Into Database');</script>";
        }
    }
?>