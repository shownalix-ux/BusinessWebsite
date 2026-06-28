<?php
$conn = new mysqli("localhost","root","","saas_agency");

if($conn->connect_error){
    die("DB Connection Failed");
}

session_start();
?>Xn

