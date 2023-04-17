<?php
require_once("koneksi.php");

$id = $_GET['id'];
$query = "DELETE FROM pegawai WHERE id = '$id'"; //query hapus data

if (mysqli_query($conn, $query)) {
    header("Location: utama.php"); //redirect ke utama.php
}else {
    echo "Hapus Data Gagal";
}
?>