<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi – Pemrograman Web</title>
</head>

<body>

    <h2>CRUD DATA mahasiswa </h2>
    <br />
    <a href="tambah.php">+ TAMBAH mahasiswa</a>
    <br />
    <br />

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama'] ?></td>
                <td><?php echo $d['npm']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>