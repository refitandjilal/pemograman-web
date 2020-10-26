<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h2>Pendaftaran Mata Kuliah</h2>
    
    <?php
        if ($status == 1){
    ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Data berhasil di input
        </div>
    <?php
        }
        else if ($status == 0){
    ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Data berhasil di input
        </div>
    <?php
        }
    ?>


    <form method="post" action="registrasi_mk.php">
    <div class="form-group">
        <label>Kode Mata Kuliah</label>
        <input class="form-control" type="text" name="kodemk">
    </div>
    <div class="form-group">
        <label>Nama Mata Kuliah</label>
        <input class="form-control" type="text" name="namamk">
    </div>
    <div class="form-group">
        <label>Kategori Mata Kuliah</label>
        <select name="kategori" class="form-control">
        <option value="pilih">pilih</option>
        <option value="MKMA">Mata Kuliah Major</option>
        <option value="MKMI">Mata Kuliah Minor</option>
        <option value="MKPIL">Mata Kuliah Minor</option>


    <div class="form-group">
        <label>SKS</label>
        <input class="form-control" type="text" name="sks">
    </div>
        <input class ="btn btn-primary" type="submit" name="tombolSubmit" value="Simpan">
        
    </form>
    <?php
        $status = 1; //tidak sukses
        if (!isset($_POST['tombolSubmit'])){
            include_once "koneksi.php";
            $kodemk = $_POST['kodemk'];
            $namamk = $_POST['namamk'];
            $kategori = $_POST['kategori'];
            $sks = $_POST['sks'];

            //buat koneksi
            $strsql = "INSERT INTO matakuliah (kodemk, namamk, kategori, sks)
            VALUES ('$kodemk', ' $namamk', '$kategori', '$sks')";

            $runSQL = mysql_query($conn,$strql);
            if ($runSQL) {
                $status = 1;
            }
            else {
                $status = 0;
            }
        }
        ?>
</div>

</body>
</html>