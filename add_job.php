<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $con->query("INSERT INTO Banen (Naam, Beschrijving) VALUES ('$title', '$description')");
    header("Location: admin_dashboard.php");
    exit();
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Job Title" required><br>
    <textarea name="description" placeholder="Description" required></textarea><br>
    <button type="submit">Add Job</button>
</form>