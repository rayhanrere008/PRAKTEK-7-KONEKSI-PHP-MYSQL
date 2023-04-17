<?php
require("koneksi.php");
$data = mysqli_query($conn, "SELECT * from pegawai");
?>

<DOCTYPE html>
<html>
<head>
    <title>Praktikum</title>
</head>
<body>
    <h3>Daftar Data Pegawai</h3>
    <a href="penyimpanan.php">Tambah Data</a>

    <table border="1px">
        <tr>
            <th>ID Pegawai</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>

    <?php while ($row = mysqli_fetch_assoc($data)){ ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['fname'] ?></td>
        <td><?php echo $row['lname'] ?></td>
        <td><?php echo $row['tgl_lahir'] ?></td>
        <td><?php echo $row['alamat'] ?></td>
        <td><?php echo $row['jeniskelamin'] ?></td>
        <td><?php echo $row['gaji'] ?></td>
        <td>
            <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php
    } // end while

    mysqli_close($conn); //menutup koneksi ke database
    ?>
    </table>
</body>
</html>