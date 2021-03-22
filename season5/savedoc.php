<?php
print_r($_POST);

$name = $_POST['name']; 
$address = $_POST['address']; 
$phone = $_POST['phone']; 
$spec = $_POST['spec']; 

include ("connectionfile.php");

echo $sql = "INSERT INTO `doc`( `name`, `address`, `phone`, `spic`) VALUES ('$name' , '$address' , '$phone' , '$spec')";

$conn->query($sql); 
     
?> 