<?php
require("../admin/layout/db.php");

$email = $_POST["email"];
$password = $_POST["password"];

if($email=="admin@gmail.com" && $password=="admin"){
    header("Location:/admin/home.php");
    die();
}else{
    header("Location:/admin?err=Email or Password is Wrong!");
    die();
}
?>