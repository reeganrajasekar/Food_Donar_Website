<?php 
require("../admin/layout/db.php");

$amount = $_POST["amount"];
$did= $_COOKIE["id"];

$sql = "INSERT INTO amount(amount,did) VALUES('$amount','$did');";

try {
    $conn->query($sql);
    header("Location:/donar/home.php?msg=Amount donated Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/donar/home.php?err=Something Went Wrong!");
    die();
}

?>