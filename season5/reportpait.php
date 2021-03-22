<?php 
include ("up.php");
?>
  

  <?php
include ("connectionfile.php");
//print_r($_POST);
if (isset($_POST['ButDele']))
{
  $theid = $_POST['id'];
 $sql = "DELETE FROM `pait` WHERE id = '$theid'";
 $conn->query($sql);
 echo "Data was removed!";
}
if (isset($_POST['ButEdit']))
{
  $theid = $_POST['id'];
   
  $id =  $_POST['id'];  
  $name =   $_POST['name']; 
  $age =   $_POST['age']; 
  $address =   $_POST['address'];  
  $phone =   $_POST['phone']; 

 $sql = "UPDATE `pait` SET `name`='$name',`address`='$address',`age`='$age',`phone`='$phone' WHERE id = '$theid'";
 $conn->query($sql);
 echo "Data was Edited!";
}
$sql = "SELECT `id`, `name`, `address`, `age`, `phone` FROM `pait` ";
$result = $conn->query($sql);
//print_r($result);
if ($result->num_rows > 0) {
  // output data of each row
  ?>
    <table class="table">
    <tr>
    <td>id</td>
    <td>name</td>
    <td>age</td>
    <td>address</td>
    <td>phone</td>
    </tr>
    

  <?php
  $count = 1;
  while($row = $result->fetch_assoc()) {
    ?>
    <form method = "POST" action = "reportpait.php">
    <?php
   //print_r($row);
   echo "<input name = 'id' type = 'hidden' value ='".$row['id']."'>";
   echo "<tr><td>".$count."</td>"; 
   $count = $count+1;
  
   echo "<td><input name = 'name' value =".$row['name']."></td>" ; 


   echo "<td><input name = 'age' type= 'text' value = '".$row['age']."'></td>" ; 
   
   ?><td><input type = "text" name = 'address' value = "<?php echo $row['address'];?>"></td><?php

   echo "<td><input name = 'phone' type= 'text' value = '".$row['phone']."'></td>" ; 
   
  



   echo "<td><input name = 'ButEdit' type = 'submit' value = 'edit' class='btn btn-warning'></td>";
   echo "<td><input name = 'ButDele' type = 'submit' value = 'X' class='btn btn-danger'></td>";
echo "</tr>";
echo "</form>";
  }
  echo "</table>";
 
} else {
  echo "0 results";
}
$conn->close();
?> 



  


</main>


    
  </body>
</html>
