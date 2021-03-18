<?php
$accountroot = $_POST['accountroot']; 
$amount = $_POST['amount']; 
$from = $_POST['from']; 
$movement = $_POST['movement']; 
$dateacc = $_POST['dateacc'];

$servername = "localhost";
$username = "root";
$password = "oracle";
$dbname = "phar";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = " 
INSERT INTO `account`
(
    `account root`,
    `amount`, 
    `type of Account`, 
    `movement`, 
    `date`) 
    VALUES (
        '$accountroot' ,
        $amount ,
        '$from' ,
        '$movement' ,
        '$dateacc'
    )
";

$conn->query($sql); 
     
?> 