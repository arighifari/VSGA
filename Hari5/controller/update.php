<?php 
    include('../config/config.php');

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];


        $query = "UPDATE data_mahasiswa SET nim_Mahasiswa='$nim',nama_Mahasiswa='$nama',jenis_Kelamin='$jenis' WHERE id_Mahasiswa='$id'";
        $update = mysqli_query($conn,$query);
        if($update){
            echo "<script type='text/javascript'>window.location='../mahasiswa.php';alert('Success Update Data');</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location='../mahasiswa.php';alert('Failed Update Data');</script>";


        }
    }
?>