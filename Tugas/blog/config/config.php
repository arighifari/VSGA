<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbname = "vsga";
    $dbpass = "";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn){
        echo "<script>alert('Failed Connect into Database');</script>";
    }

?>