<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h1>Business Website Admin Panel</h1>

<p>Welcome, Admin 👋</p>

<hr>

<ul>
    <li><a href="services.php">Manage Services</a></li>
    <li><a href="portfolio.php">Manage Portfolio</a></li>
    <li><a href="pricing.php">Manage Pricing</a></li>
    <li><a href="messages.php">Contact Messages</a></li>
    <li><a href="settings.php">Website Settings</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
