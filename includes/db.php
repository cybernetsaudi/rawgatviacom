<?php
require_once('../config/config.php');
try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}