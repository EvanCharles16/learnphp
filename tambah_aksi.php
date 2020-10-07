<?php
// Koneksi Database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];

// Menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa values(null,'$nama','$npm','$alamat')");

// Mengalihkan halaman kembali ke index.php
header("location:index.php");
