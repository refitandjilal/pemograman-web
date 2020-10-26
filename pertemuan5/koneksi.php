<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDB = "weblanjut";

//Membuat Koneksi
$conn = mysql_connect($namaServer, $username, $password, $namaDB);
//cek koneksi
if (!conn){
    die("Koneksi Gagal");
}
?>