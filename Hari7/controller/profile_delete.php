<?php 
    include('../config/config.php');

        $id = $_GET['id'];

        $query = "DELETE FROM user WHERE id='$id'";
        $delete = mysqli_query($conn,$query);
        if($delete){
            echo "<script type='text/javascript'>window.location='../home.php';alert('Success Delete Data');</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location='../home.php';alert('Failed Delete Data');</script>";
        
    }
?>