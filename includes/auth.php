<?php
session_start();
if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
    $_SESSION['username'] = 'admin';
    header("Location: ../dashboard.php");
} else {
    echo "Invalid credentials.";
}
?>
