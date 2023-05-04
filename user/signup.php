<?php 
require("../admin/layout/db.php");

$name = $_POST["name"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];

$sql = "INSERT INTO user(name,password,mobile,email) VALUES('$name','$password','$mobile','$email');";

try {
    $conn->query($sql);
    header("Location:/user/?msg=Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/user?err=Something Went Wrong!");
    die();
}

?>