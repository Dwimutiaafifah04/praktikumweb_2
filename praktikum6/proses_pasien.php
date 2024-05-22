<?php 
// Panggil File
require 'dbkoneksi.php';

// tangkep data daro form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_email = $_POST['email'];
$_alamat = $_POST['alamat'];
$_kelurahan_id = $_POST['kelurahan_id'];
$data = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan_id];

// Menyiapkan query SQL untuk menyimpan data ke dalam tabel pasien
$sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Mempersiapkan statement PDO untuk eksekusi query
$stmt = $dbh->prepare($sql);

// Mengeksekusi statement dengan menyertakan data yang telah ditangkap dari form
$stmt->execute($data);

// pindahin halaman ke data pasien
header('Location: data_pasien.php');
?>