<?php
print_r($_POST);

$name = $_POST['name']; 
$address = $_POST['address']; 
$age = $_POST['age']; 
$phone = $_POST['phone']; 

include ("connectionfile.php");
echo $sql = "INSERT INTO `pait`( `name`, `address`, `age`, `phone`) VALUES ('$name' , '$address' , '$age' , '$phone')";

$conn->query($sql); 
header("Location: formpait.php");
?> 