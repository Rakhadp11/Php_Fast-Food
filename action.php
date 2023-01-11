<?php
include 'config.php' ;

if(isset($_POST['submit-cn'])){

    $nameuser = $_POST['nameuser'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $name = $_POST['name'];
    $desk = $_POST['desk'];

// menginput data ke database
mysqli_query($conn,"INSERT INTO contact values('$nameuser', '$email', '$number', '$name', '$desk')");

header('Location: index.php');
}

?>