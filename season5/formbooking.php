<?php 
include ("up.php");
include ("connectionfile.php");
session_start();
?>
 <h1 class="display-4">Form Pait<?php echo $_SESSION["userbane"];?></h1>
   <html>
      <title>
      Pait
      </title>
      <form method = "POST" action ="savebook.php">
      
      <table border='0'>
      <tr>
      <td>name pait</td>
  
      <td><?php
$sql = "SELECT `id`, `name`, `address`, `age`, `phone` FROM `pait` ";
$result = $conn->query($sql);
//print_r($result);
if ($result->num_rows > 0) {
  // output data of each row
  ?>
   <select name="paitname" class="form-control">
    
  <?php
  
  while($row = $result->fetch_assoc()) {
echo "<option>".$row['name']."</option>";  
}
echo "</select>";
}
else 
{
    echo "please enter data first";
}
?></td>
      </tr>
      <tr>
      <td>name doc</td>
      <td><?php
$sql = "SELECT `id`, `name`, `address`, `phone`, `spic` FROM `doc` WHERE 1";
$result = $conn->query($sql);
//print_r($result);
if ($result->num_rows > 0) {
  // output data of each row
  ?>
   <select name="docname" class="form-control">
    
  <?php
  
  while($row = $result->fetch_assoc()) {
echo "<option>".$row['name']."</option>";  
}
echo "</select>";
}
else 
{
    echo "please enter data first";
}
?></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input class="form-control" type = "date" name = "bookingdate"></td>
    </tr>
      
      <tr>
      <td></td>
      <td>
      <input type = 'submit' class="btn btn-warning" name = "next" value = "next" >
      </td>
      </tr>
      </table>
      </form>
      </html>
  </div>

  


</main>


    
  </body>
</html>
