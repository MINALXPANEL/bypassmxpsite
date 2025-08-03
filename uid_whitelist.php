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
    <title>Whitelist UID</title>
</head>
<body>
    <h2>Whitelist a Free Fire UID</h2>
    <form>
        <input type="text" name="uid" placeholder="Enter UID">
        <select name="duration">
            <option value="24">Daily (24h)</option>
            <option value="168">Weekly (168h)</option>
            <option value="720">Monthly (720h)</option>
        </select>
        <button type="submit">Whitelist</button>
    </form>
</body>
</html>
