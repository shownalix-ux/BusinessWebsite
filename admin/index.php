<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "admin123"){
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if(isset($error)) echo "<p>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>

        <input type="password" name="password" placeholder="Password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>

</div>

</body>
</html>
