<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website Settings</title>

<style>
body{
    font-family:Arial,sans-serif;
    background:#f4f4f4;
    margin:0;
    padding:30px;
}
.container{
    max-width:900px;
    margin:auto;
    background:#fff;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}
input,textarea{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:6px;
}
button{
    padding:12px 25px;
    background:#28a745;
    color:#fff;
    border:none;
    border-radius:6px;
    cursor:pointer;
}
</style>

</head>
<body>

<div class="container">

<h2>Website Settings</h2>

<form method="POST">

<input type="text" name="site_name" placeholder="Website Name">

<input type="email" name="email" placeholder="Business Email">

<input type="text" name="phone" placeholder="Phone Number">

<textarea name="address" placeholder="Business Address"></textarea>

<button type="submit">Save Settings</button>

</form>

</div>

</body>
</html>
