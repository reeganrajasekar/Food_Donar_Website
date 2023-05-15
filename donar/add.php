<?php 
require("../admin/layout/db.php");

$type = $_POST["type"];
$total = $_POST["total"];
$date = $_POST["date"];
$did= $_COOKIE["id"];

$sql = "INSERT INTO food(type,quan,did,uid,data,date) VALUES('$type','$total','$did','no','Waiting for Approval','$date');";

try {
    $conn->query($sql);
    header("Location:/donar/home.php?msg=Donation Posted Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/donar/home.php?err=Something Went Wrong!");
    die();
}

?>