<?php
require 'db_config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $pdo = getDBConnection();

    $stmt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
    try {
        $stmt->execute([$username, $email, $password]);
        
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['username'] = $username;
        
        echo "User registered successfully!";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "Username or email already exists!";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
