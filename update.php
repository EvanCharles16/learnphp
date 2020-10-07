<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$npm = $_POST['npm'];

mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', npm='$npm' WHERE id='$id'");

header("location:index.php?");
