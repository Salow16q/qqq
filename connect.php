<?php
$servername = "localhost"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = "123"; // Пароль пользователя базы данных
$dbname = "eeee"; // Имя базы данных

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
mysqli_set_charset($conn, 'utf8mb4');
mb_internal_encoding("UTF-8");
?>