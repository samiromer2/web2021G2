<?php 
include ("up.php");
?>
  

  <?php
include ("connectionfile.php");
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
  while($row = $result->fetch_assoc()) {
    ?>
    <?php
   //print_r($row);
   
   echo "<tr><td>".$row['id']."</td>"; 
   echo "<td>".$row['name']."</td>" ; 
   echo "<td>".$row['age']."</td>" ; 
   echo "<td>".$row['address']."</td>" ; 
   echo "<td>".$row['phone']."</td>" ; 
echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?> 

</div>

  


</main>


    
  </body>
</html>
