<?php

session_start();
include 'koneksi.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password_verify = $_POST['password'];

    $sql = "SELECT * FROM akun WHERE username = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($password_verify === $user['password']) {  // Langsung membandingkan password

            $_SESSION['id_akun'] = $user['id_akun'];
            $_SESSION['username'] = $user['username'];
            echo "<script>alert('Berhasil login');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Password salah!');</script>";
            echo "<script>window.location.href = 'login.blade.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!');</script>";
        echo "<script>window.location.href = 'login.blade.php';</script>";
        exit();
    }
}

?>
