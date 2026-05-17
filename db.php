<?php

$conn = new mysqli("127.0.1.18", "root", "", "child_center", 3306);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
//echo "Подключение успешно!";

?>