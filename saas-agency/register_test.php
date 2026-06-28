<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register Page</h2>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    if($conn->query($sql)){
        echo "<p style='color:green;'>User Registered Successfully 🚀</p>";
    } else {
        echo "<p style='color:red;'>Error: ".$conn->error."</p>";
    }
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit">Register</button>
</form>

</body>
</html>
