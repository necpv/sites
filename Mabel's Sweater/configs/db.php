<?php
    $servername = "localhost";// ваш хост
    $database = "market";// ваша бд
    $username = "root";// пользователь бд
    $password = "";// пароль к бд
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);// коннект с сервером бд
    $conn->set_charset("utf8"); // задаем кодировку
    // Проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>