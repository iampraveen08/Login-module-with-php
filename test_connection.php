<?php
require 'db_config.php';

try {
    $pdo = getDBConnection();
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
