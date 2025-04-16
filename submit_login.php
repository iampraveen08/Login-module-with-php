<?php
require 'db_config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pdo = getDBConnection();

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        if (isset($_POST['remember_me'])) {
            setcookie('user_id', $user['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('username', $user['username'], time() + (86400 * 30), "/");
        }
        
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }
}
?>
