<?php 
    include('config/config.php');

    if (isset($_POST['submit'])) {
        $kategori = $_POST['kategori'];
        $barang = $_POST['barang'];
        $harga = $_POST['harga'];


        $query = "INSERT into data_barang (id_Kategori,nama_Barang,harga_Barang) values ('$kategori','$barang','$harga')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            echo "<script type='text/javascript'>window.location='index.php';alert('Success Insert Data Into Database');</script>";
        }
    }
?>