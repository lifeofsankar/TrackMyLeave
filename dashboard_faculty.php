<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'faculty') {
    header("Location: main_login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<div class="login-container" style="max-width:none; width:400px;">
    <h2>Welcome Faculty: <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
    <a href="logout.php" class="login-button">Logout</a>
</div>
</body>
</html>
