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
    <title>Exchange UID</title>
</head>
<body>
    <h2>Exchange UID</h2>
    <form>
        <input type="text" name="source_uid" placeholder="Source UID">
        <input type="text" name="target_uid" placeholder="Target UID">
        <input type="text" name="reason" placeholder="Reason (Optional)">
        <button type="submit">Exchange</button>
    </form>
</body>
</html>
