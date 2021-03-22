<?php 
include ("up.php");
session_start();

?>
      <html>
<title>
Doc
</title>
<h1 class="display-4">Form Doc <?php echo  $_SESSION['userbane']; ?></h1>
   <html>
      <title>
      Pait
      </title>
<form method = "POST" action ="savedoc.php">
<table border='0'>
<tr>
<td>name</td>
<td><input name = "name" ></td>
</tr>
<tr>
<td>address</td>
<td><input name = "address"></td>
</tr>
<tr>
<td>phone</td>
<td><input name = "phone"></td>
</tr>
<tr>
<td>spic</td>
<td>
<input name = "spec">
</td>
</tr>

<td></td>
<td>
<input type = 'submit' name = "next" value = "next" >
</td>
</tr>
</table>
</form>
</html>
  </div>

  


</main>


    
  </body>
</html>
