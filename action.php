<?php
include 'db.php';

$action = $_POST['act'];

// Регистрация
if ($action == 'register') {
    $username = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Регистрация успешна!";
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
}


?>