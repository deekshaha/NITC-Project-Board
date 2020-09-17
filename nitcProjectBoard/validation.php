<?php 
ob_start();
session_start();
 include_once 'connection.php' ;

mysqli_select_db($conn, 'project' );
$email = $_POST['email'];
$pass = $_POST['password'];

$q = " select * from register where Email = '$email' && Password = '$pass'  ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
  $_SESSION['user'] = $email;
  header('location: home.html');
}
else
{ ?>
          <script>
                  alert("User Not Registered");
                  header('location: login.php');
           </script>

<?php
}

?>
