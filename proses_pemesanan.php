<?php
require "koneksi.php";

$jenis_cucian = htmlspecialchars($_POST['jenis_cucian']);
$nama  = htmlspecialchars($_POST['nama']);
$no_hp = htmlspecialchars($_POST['no_hp']);
$berat = intval($_POST['berat']);

$stmt = $conn->prepare("INSERT INTO data_laundry (id_akun, nama, jenis_cucian, no_hp, berat) VALUES (?,?,?,?,?)");
$stmt->bind_param("isssd", $_SESSION['id_akun'], $nama, $jenis_cucian, $no_hp, $berat);

if ($stmt->execute()) {
    echo "<script>
    alert('Berhasil pinjam');
    window.location.href = 'index.php'; </script>";
    exit();
} else {
    die("Gagal meminjam buku: " . $stmt->error);
}
?>