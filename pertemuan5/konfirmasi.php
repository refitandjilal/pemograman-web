<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['tombolSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $namaDepan = $_POST['namaDepan'];
        $namaBelakang = $_POST['namaBelakang'];

        $sql = "INSERT INTO registrasi(username, password, email, namaDepan, namaBelakang)
        VALUES ('$username', '$password', '$email', '$namaDepan', '$namaBelakang')"

        if (mysql_query($conn, $sql)){
        echo "Data berhasil diinput"
        }
        else{
            echo "Data tidak berhasil diinput"
            $sql <br> dg eror
        }
    }