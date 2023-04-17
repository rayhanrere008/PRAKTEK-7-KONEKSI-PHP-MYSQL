<?php
include("koneksi.php");
error_reporting(0);

if (isset($_POST['submit'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $gaji = $_POST["gaji"];
}
?>

</DOCTYPE html>
<html>
<head>
    <title>Update Data Pegawai</title>
</head>
<body>
    <h3>Update Data</h3>
    <form action="penyimpanan.php" method="POST">
        <table>
            <tr><td>Nama Depan</td><td><input type="text" name="fname"></td></tr>
            <tr><td>Nama Belakang</td><td><input type="text" name="lname"></td></tr>
            <tr><td>Tanggal Lahir</td><td><input type="date" name="tgl_lahir"></td></tr>
            <tr><td>Alamat</td><td><textarea name="alamat" rows="3" cols="20"></textarea></td></tr>
            <tr><td>Jenis Kelamin</td><td><input type="text" name="jeniskelamin"></td></tr>
            <tr><td>Gaji</td><td><input type="number" name="gaji"></td></tr>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit" name="submit" value="Edit Data">
        </table>
    </form>
<?php
// update data pada tabel pegawai
$query = "UPDATE pegawai SET fname='$fname',lname='$lname',tgl_lahir='$tgl_lahir',alamat='$alamat',jeniskelamin='$jeniskelamin',gaji='$gaji'  WHERE id='$id'";

// if (mysqli_query($conn, $query)) {
//     echo "Data berhasil diupdate";
// } else {
//     echo "Terjadi kesalahan: " . mysqli_error($conn);
// }

mysqli_close($conn); // menutup koneksi ke database
?>
</body>
</html>