<?php

require 'config.php';

if(isset($_POST['submit'])){
    $nameuser = $_POST['nameuser'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $name = $_POST['name'];
    $desk = $_POST['desk'];

    $addtotable = mysqli_query($conn,"INSERT INTO contact (nameuser, email, number, name, desk) values('$nameuser','$email','$number','$name','$desk')");
    if($addtotable){
        header('location:index.php');
    } else{
        echo 'Gagal';
        header('location:index.php');
    }
};
?>