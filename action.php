<?php
include 'db.php';

$action = $_POST['act'];

// Регистрация
if ($action == 'register') {
    $username = $_POST['login'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $fio = $_POST['full_name'];
    $phone = $_POST['phone'];

    $check = mysqli_query($conn, "SELECT id FROM users WHERE login='$username' OR email='$email' OR phone='$phone'");

    if (mysqli_num_rows($check) > 0) {
        echo "логин, email или телефон уже занят!";
    } else {
        $sql = "INSERT INTO users (login, email, password_hash, full_name, phone) VALUES ('$username', '$email', '$password', '$fio', '$phone')";

        if (mysqli_query($conn, $sql)) {
            //echo "Регистрация успешна!";
            header("Location: index.php");
        } else {
            echo "Ошибка: " . mysqli_error($conn);
        }
    }
}

// Логин
if ($action == 'login') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE login='$login' OR email='$login' OR phone='$login'");

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['login'];
            $_SESSION['role'] = $user['role'];
            //echo "Вход выполнен, привет " . $user['login'];
            header("Location: index.php");
        } else {
            echo "Неверный пароль";
        }
    } else {
        echo "Пользователь не найден";
    }
}

// Подача заявки
if ($action == 'apply') {
    $user_id = $_SESSION['user_id'];

    $circle = $_POST['circle'];
    $child_age = $_POST['child_age'];
    $start_date = $_POST['start_date'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO applications (user_id, circle, child_age, start_date, payment_method) VALUES ('$user_id', '$circle', '$child_age', '$start_date', '$payment_method')";

    if (mysqli_query($conn, $sql)) {
        echo "Заявка отправлена!";
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
}
?>
