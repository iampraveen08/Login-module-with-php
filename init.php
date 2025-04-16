<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
        $_SESSION['user_id'] = $_COOKIE['user_id'];
        $_SESSION['username'] = $_COOKIE['username'];
    } else {
        header('Location: index.html');
        exit();
    }
}
?>

<?php
require 'init.php';
echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
?>
