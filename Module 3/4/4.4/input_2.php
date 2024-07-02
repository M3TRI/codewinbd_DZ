<?php
$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    // Пользователь аутентифицирован
    // ...
} 
else {
    // Неправильное имя пользователя или пароль
    // ...
}
?>