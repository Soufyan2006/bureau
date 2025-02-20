<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connect.php';
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $con->query("UPDATE Banen SET Naam='$Naam', beschrijving='$Beschrijving' WHERE Baan_id=$id");
    header("Location: admin_dashboard.php");
    exit();
}

$job = $con->query("SELECT * FROM Banen WHERE Baan_id=$id")->fetch_assoc();
?>

<form method="POST">
    <input type="text" name="title" value="<?= $job['Naam'] ?>"><br>
    <textarea name="description"><?= $job['Beschrijving'] ?></textarea><br>
    <button type="submit">Update Job</button>
</form>