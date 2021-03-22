<?php 
//print_r($_POST);
$paitname = $_POST['paitname'];
$docname  = $_POST['docname'];
$bookingdate = $_POST['bookingdate'];

include ("connectionfile.php");
echo $sql = "INSERT INTO `bookingdata`( `pait`, `doc`, `date`) VALUES ('$paitname' , '$docname' , '$bookingdate')";

$conn->query($sql); 
header("Location: formbooking.php");
?> 
