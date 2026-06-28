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
<title>Contact Messages</title>

<style>
body{
    font-family:Arial,sans-serif;
    background:#f5f5f5;
    margin:0;
    padding:30px;
}

.container{
    max-width:1000px;
    margin:auto;
    background:#fff;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

th,td{
    border:1px solid #ddd;
    padding:12px;
    text-align:left;
}

th{
    background:#007bff;
    color:#fff;
}
</style>

</head>
<body>

<div class="container">
<h2>Contact Messages</h2>

<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Message</th>
</tr>

<tr>
<td colspan="3" style="text-align:center;">
No messages yet.
</td>
</tr>

</table>

</div>

</body>
</html>
^\

<?php
session_start();

require_once("../config/database.php");

$messages = $db->query("SELECT * FROM messages ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Messages</title>

<style>
body{
font-family:Arial,sans-serif;
background:#f5f5f5;
padding:20px;
}

table{
width:100%;
border-collapse:collapse;
background:#fff;
}

th,td{
padding:12px;
border:1px solid #ddd;
}m

th{
background:#007bff;
color:#fff;
}
</style>

</head>
<body>

<h2>Contact Messages</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Date</th>
</tr>

<?php foreach($messages as $row){ ?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= htmlspecialchars($row['name']); ?></td>

<td><?= htmlspecialchars($row['email']); ?></td>

<td><?= htmlspecialchars($row['message']); ?></td>

<td><?= $row['created_at']; ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>
