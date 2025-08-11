<?php
session_start();
include 'config.php';

$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];

$table = "";
$redirect = "";

if ($role == "admin") {
    $table = "admins";
    $redirect = "dashboard_admin.php";
} elseif ($role == "student") {
    $table = "students";
    $redirect = "dashboard_student.php";
} elseif ($role == "faculty") {
    $table = "faculty";
    $redirect = "dashboard_faculty.php";
} else {
    header("Location: error.html");
    exit();
}

// Use prepared statements for security (prevent SQL injection)
$stmt = $conn->prepare("SELECT * FROM $table WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;
    header("Location: $redirect");
} else {
    header("Location: error.html");
}
$stmt->close();
$conn->close();
exit();
?>
