<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h2>Pendaftaran Anggota</h2>
    <form method="post" action="konfirmasi.php">
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" type="text" name="username">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password">
    </div>
    <div class="form-group">
        <label>Nama Depan</label>
        <input class="form-control" type="text" name="namaDepan">
    <div class="form-group">
        <label>Nama Belakang</label>
        <input class="form-control" type="text" name="namaBelakang">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="text" name="email">
    </div>
        <input class ="btn btn-primary" type="submit" name="tombolSubmit" value="Daftar">
        
    </form>
</div>

</body>
</html>