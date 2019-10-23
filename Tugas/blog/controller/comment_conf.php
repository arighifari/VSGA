<?php 
    include('../config/config.php');


    if (isset($_POST['submit'])) {
        $id = mysqli_real_escape_string($conn,$_POST['id']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $comment = mysqli_real_escape_string($conn,$_POST['komentar']); 

        $query = "INSERT into tb_komentar (id_post,email,content) values ('$id','$email','$comment')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            echo "<script type='text/javascript'>window.location='../blog-single.php?idpost=$id';alert('Success Post A Comment');</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location='../blog-single.phpidpost=$id';alert('Failed Post A Comment');</script>";
        }
    }
?>