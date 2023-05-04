<?php
require("../admin/layout/db.php");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        setcookie("uid",$row["id"],time() + 2 * 24 * 60 * 60);
        setcookie("uname",$row["name"],time() + 2 * 24 * 60 * 60);
        header("Location:/user/home.php");
        die();
    }
}else{
    header("Location:/user?err=Email or Password is Wrong!");
    die();
}
?>