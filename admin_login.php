<?php
session_start();

// DATABASE CONNECTION
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webshop";
$port = "3306";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $port);

// CHECK CONNECTION
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// LOGIN LOGIC
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);



    // Corrected Query
    $query = "SELECT * FROM admin_user WHERE email='$username' AND password='$password'";

    echo $query;

    $result = $con->query($query);
    echo "<pre>";
    var_dump($result);
    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        echo "Logged in as: " . $admin['email']; // Debugging this line
        $_SESSION['admin'] = $admin['email']; // Store session
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }

}
?>

<!-- LOGIN FORM -->
<form method="POST">
    <input type="text" name="username" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>