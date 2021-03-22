<?php 
include ("connectionfile.php");
if (isset($_POST['next']))
{
 // print_r($_POST);
 
  $username =  $_POST['username']; 
  $password =  $_POST['password'];  
  $sql = "SELECT `id`, `username`, `password` FROM `user` WHERE `username` = '$username' and `password` = '$password'";
$result = $conn->query($sql);
//print_r($result);
if ($result->num_rows > 0) {
  session_start();
  $_SESSION["userbane"] = $username;
  header("Location: formpait.php");
}
else 
echo "sorry wrong username or password";
}
  
?>
<?php 
include ("up.php");
?>
 <h1 class="display-4">Form login</h1>
   <html>
      <title>
      login form
      </title>
      <form method = "POST" action ="index.php">
      
      <table border='0'>
      <tr>
      <td>user name</td>
      <td><input  class="form-control" name = "username" ></td>
      </tr>
      <tr>
      <td>password</td>
      <td><input class="form-control" name = "password"></td>
      </tr>
      
    
      <tr>
      <td></td>
      <td>
      <input type = 'submit' class="btn btn-warning" name = "next" value = "login" >
      </td>
      </tr>
      </table>
      </form>
      </html>
  </div>

  


</main>


    
  </body>
</html>
