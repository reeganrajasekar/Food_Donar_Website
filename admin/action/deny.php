<?php 
require("../layout/db.php");

$id= $_POST["id"];

$sql = "UPDATE food SET data='Denied' WHERE id='$id'";

try {
    $conn->query($sql);
    header("Location:/admin/food.php?msg=Denied Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/admin/food.php?err=Something Went Wrong!");
    die();
}

?>