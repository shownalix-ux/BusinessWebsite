<?php
session_start();
require_once("../config/database.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = trim($_POST["title"]);
    $description = trim($_POST["description"]);

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {

        $filename = time() . "_" . basename($_FILES["image"]["name"]);
        $target = "../uploads/portfolio/" . $filename;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {

            $stmt = $db->prepare("INSERT INTO portfolio(title,description,image) VALUES(?,?,?)");
            $stmt->execute([$title, $description, $filename]);

            $message = "Project uploaded successfully!";
        } else {
            $message = "Image upload failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Portfolio Upload</title>
</head>
<body>

<h2>Upload Portfolio Project</h2>

<?php if($message) echo "<p>$message</p>"; ?>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="title" placeholder="Project Title" required><br><br>

<textarea name="description" placeholder="Project Description" required></textarea><br><br>

<input type="file" name="image" accept="image/*" required><br><br>

<button type="submit">Upload</button>

</form>

</body>
</html>
