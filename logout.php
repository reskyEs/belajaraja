<?php
require "koneksi.php";
// Mulai sesi untuk dapat menghancurkan sesi yang ada
session_start();

// Hancurkan semua data sesi yang ada
session_unset();  // Menghapus semua variabel sesi
session_destroy();  // Menghancurkan sesi

// Redirect ke halaman login setelah logout
header("Location: login.blade.php");
exit(); // Pastikan tidak ada proses lebih lanjut setelah redirect
?>