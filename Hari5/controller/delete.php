<?php 
    include('../config/config.php');

        $nim = $_GET['nim'];

        $query = "DELETE FROM data_mahasiswa WHERE nim_Mahasiswa='$nim'";
        $delete = mysqli_query($conn,$query);
        if($delete){
            echo "<script type='text/javascript'>window.location='../mahasiswa.php';alert('Success Delete Data');</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location='../mahasiswa.php';alert('Failed Delete Data');</script>";
        
    }
?>