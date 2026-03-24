<?php
session_start();

// Check login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?> 😊</h2>

<p>This is your profile page.</p>

<a href="profile.php?logout=true">Logout</a>

</body>
</html>
