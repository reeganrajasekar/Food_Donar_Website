<?php 
require("../layout/db.php");

$id= $_POST["id"];

$sql = "UPDATE food SET data='Approved' WHERE id='$id'";

try {
    $conn->query($sql);
    header("Location:/admin/food.php?msg=Approved Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/admin/food.php?err=Something Went Wrong!");
    die();
}

?>