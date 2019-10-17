<?php
    $dbhost = 'localhost';
    $dbname = 'db_barang';
    $dbuser = 'root';
    $dbpass =  '';
    $conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        echo "<script>alert('Failed Connect into Database');</script>";
    }
?>