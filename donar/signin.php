<?php
require("../admin/layout/db.php");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM donar WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        setcookie("id",$row["id"],time() + 2 * 24 * 60 * 60);
        setcookie("name",$row["name"],time() + 2 * 24 * 60 * 60);
        header("Location:/donar/home.php");
        die();
    }
}else{
    header("Location:/donar?err=Email or Password is Wrong!");
    die();
}
?>