<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_pegawai";

$conn = mysqli_connect($host, $user, $password);
// if ($conn) {
//     echo "Database MySQL berhasil dikoneksikan";
// } else {
//     echo "Database MySQL gagal dikoneksikan";
// }

$hasil = mysqli_select_db($conn, $dbname);
// if ($hasil) {
//     echo "Database $dbname berhasil dipilih";
// } else {
//     echo "Database $dbname gagal dipilih";
// }
?>