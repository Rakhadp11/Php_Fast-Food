<?php
session_start();

// Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","admin_web");

//Menambah Barang baru
if(isset($_POST['addnewbarang'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($con,"INSERT INTO stock_br (namabarang, deskripsi, stock) values('$namabarang','$deskripsi','$stock')");
    if($addtotable){
        header('location:index.php');
    } else{
        echo 'Gagal';
        header('location:index.php');
    }
}


?>