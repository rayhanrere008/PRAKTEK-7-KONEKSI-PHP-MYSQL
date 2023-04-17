<?php
include("koneksi.php");

if (isset($_POST['submit'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $gaji = $_POST["gaji"];

    //query insert data ke database dalam table pegawai
    $query = "INSERT INTO pegawai SET fname='$fname', lname='$lname', tgl_lahir='$tgl_lahir', alamat='$alamat', jeniskelamin='$jeniskelamin', gaji='$gaji' ";
    if (mysqli_query($conn, $query)) {
        header("Location: utama.php");
    }else {
        echo "Tambah data gagal";
    }
}
mysqli_close($conn); //menutup koneksi ke databse
?>

</DOCTYPE html>
<html>
<head>
    <title>Input Data Pegawai</title>
</head>
<body>
    <h3>Tambah Data Pegawai</h3>
    <form action="penyimpanan.php" method="POST">
        <table>
            <tr><td>Nama Depan</td><td><input type="text" name="fname"></td></tr>
            <tr><td>Nama Belakang</td><td><input type="text" name="lname"></td></tr>
            <tr><td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir"></td></tr>
            <tr><td>Alamat</td><td><textarea name="alamat" rows="3" cols="20"></textarea></td></tr>
            <tr><td>Jenis Kelamin</td><td><input type="text" name="jeniskelamin"></td></tr>
            <tr><td>Gaji</td><td><input type="number" name="gaji"></td></tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
</body>
</html>