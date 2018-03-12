<?php
session_start();

if ($_SESSION['canAccess'] == false) {
    header('Location: login.php');
    exit;
}

echo "<h1>Welcome! Dashboard</h1>"


?>