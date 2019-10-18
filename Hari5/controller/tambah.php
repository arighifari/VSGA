<?php 
    include('../config/config.php');

    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];


        $query = "INSERT into data_mahasiswa (nim_Mahasiswa,nama_Mahasiswa,jenis_Kelamin) values ('$nim','$nama','$jenis')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            echo "<script type='text/javascript'>window.location='../mahasiswa.php';alert('Success Insert Data Into Database');</script>";
        }
    }
?>