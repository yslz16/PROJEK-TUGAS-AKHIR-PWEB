<?php
$valid_user = [
    'name' => 'yusliza',
    'email' => 'yusliza@gmail.com',
    'phone' => '08123456789',
    'password' => 'yusliza123',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $password = htmlspecialchars(trim($_POST["password"]));
    $confirm_password = htmlspecialchars(trim($_POST["confirm_password"]));

    if ($password !== $confirm_password) {
        echo "<script>alert('Password dan konfirmasi password tidak cocok!'); window.location.href = 'login-form.php';</script>";
    } else {
        if (
            $name === $valid_user['name'] &&
            $email === $valid_user['email'] &&
            $phone === $valid_user['phone'] &&
            $password === $valid_user['password']
        ) {
            echo "<script>alert('Login berhasil!'); window.location.href = 'data_contact.php';</script>";
        } else {
            echo "<script>alert('Nama, email, nomor telepon, atau password salah!'); window.location.href = 'login-form.php';</script>";
        }
    }
}
