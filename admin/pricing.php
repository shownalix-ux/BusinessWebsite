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
<title>Pricing Manager</title>

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
input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:6px;
}
button{
    padding:12px 25px;
    background:#007bff;
    color:#fff;
    border:none;
    border-radius:6px;
    cursor:pointer;
}
</style>
</head>
<body>

<div class="container">
<h2>Pricing Manager</h2>

<form method="POST">
<input type="text" name="plan" placeholder="Plan Name" required>
<input type="text" name="price" placeholder="Price" required>
<input type="text" name="features" placeholder="Features (comma separated)">
<button type="submit">Save Plan</button>
</form>

</div>

</body>
</html>
