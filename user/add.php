<?php 
require("../admin/layout/db.php");

$id = $_POST["id"];
$uid= $_COOKIE["uid"];

$sql = "UPDATE food SET uid='$uid' WHERE id='$id'";

try {
    $conn->query($sql);
    header("Location:/user/home.php?msg=Requested Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/user/home.php?err=Something Went Wrong!");
    die();
}

?>