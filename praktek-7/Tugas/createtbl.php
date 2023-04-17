<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

// Buat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Periksa Koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Buat tabel dengan sql
$sql = "CREATE TABLE pegawai (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    tgl_lahir DATE DEFAULT NULL,
    alamat varchar(100) NOT NULL,
    jeniskelamin varchar(10) NOT NULL,
    gaji INT(10) DEFAULT NULL
    )";

if (mysqli_query($conn, $sql)) {
  echo "Table pegawai created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>