<?php 
include ("up.php");
?>
 <h1 class="display-4">Form Pait</h1>
   <html>
      <title>
      Pait
      </title>
      <form method = "POST" action ="savepait.php">
      
      <table border='0'>
      <tr>
      <td>name</td>
      <td><input  class="form-control" name = "name" ></td>
      </tr>
      <tr>
      <td>address</td>
      <td><input class="form-control" name = "address"></td>
      </tr>
      <tr>
      <td>age</td>
      <td><input class="form-control" name = "age"></td>
      </tr>
      <tr>
      <td>phone</td>
      <td>
      <input class="form-control" type = "text" name = "phone">
      </td>
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
