<?php 
require("./db.php");

$sql = "CREATE TABLE amount(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    amount VARCHAR(500) NOT NULL,
    did INT(6) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table amount created successfully<br>";
} else {
    echo "Error creating table:amount";
}

$sql = "CREATE TABLE food(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(500) NOT NULL,
    quan VARCHAR(500) NOT NULL,
    date VARCHAR(500) NOT NULL,
    data VARCHAR(500) NOT NULL,
    did INT(6) NOT NULL,
    uid VARCHAR(6) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table food created successfully<br>";
} else {
    echo "Error creating table:food";
}

$sql = "CREATE TABLE donar(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL,
    password VARCHAR(500) NOT NULL,
    address VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table donar created successfully<br>";
} else {
    echo "Error creating table:donar";
}

$sql = "CREATE TABLE user(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL,
    password VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully<br>";
} else {
    echo "Error creating table:user";
}



?>