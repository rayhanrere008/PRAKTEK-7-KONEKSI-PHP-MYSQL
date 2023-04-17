<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_buku_tamu";

// Buat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Periksa Koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Buat tabel dengan sql
$sql = "CREATE TABLE buku_tamu (
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    ISI text
    )";

if (mysqli_query($conn, $sql)) {
  echo "Table buku_tamu created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>