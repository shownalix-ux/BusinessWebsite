<?php
require_once("../config/database.php");

if (isset($_GET['id'])) {

    $stmt = $db->prepare("DELETE FROM portfolio WHERE id=?");
    $stmt->execute([$_GET['id']]);
}

header("Location: portfolio.php");
exit;
?>
