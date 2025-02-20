<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connect.php';
$jobs = $con->query("SELECT * FROM banen");
?>

<h2>Dashboard Admin</h2>
<a href="add_job.php">Add New Job</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php while ($banen = $jobs->fetch_assoc()): ?>
    <tr>
        <td><?= $banen['Baan_id'] ?></td>
        <td><?= $banen['Naam'] ?></td>
        <td><?= substr($banen['Beschrijving'], 0, 50) ?>...</td>
        <td>
            <a href="edit_job.php?id=<?= $banen['Baan_id'] ?>">Edit</a> |
            <a href="delete_job.php?id=<?= $banen['Baan_id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>