<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="uid_whitelist.php">Whitelist UID</a> |
    <a href="uid_exchange.php">Exchange UID</a> |
    <a href="includes/logout.php">Logout</a>
</body>
</html>
