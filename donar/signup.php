<?php 
require("../admin/layout/db.php");

$name = $_POST["name"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];

$sql = "INSERT INTO donar(name,password,mobile,email,address) VALUES('$name','$password','$mobile','$email','$address');";

try {
    $conn->query($sql);
    header("Location:/donar/?msg=Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/donar?err=Something Went Wrong!");
    die();
}

?>