<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Services</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h1>Manage Services</h1>

<p>Yahan se aap website ki services add, edit aur delete kar sakenge.</p>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Service Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    <tr>
        <td>1</td>
        <td>Web Development</td>
        <td>Professional Business Websites</td>
        <td>
            <button>Edit</button>
            <button>Delete</button>
        </td>
    </tr>
</table>

<br>

<button>Add New Service</button>

</body>
</html>
