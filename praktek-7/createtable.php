<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Buat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Periksa Koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Buat tabel dengan sql
$sql = "CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL,
    negara VARCHAR(30) NOT NULL,
    champion int(3)
    )";

if (mysqli_query($conn, $sql)) {
  echo "Table liga created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>