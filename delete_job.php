<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connect.php';
$id = $_GET['id'];

$con->query("DELETE FROM Banen WHERE Baan_id=$id");
header("Location: admin_dashboard.php");
exit();
?>