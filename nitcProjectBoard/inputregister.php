<?php 

 include_once 'connection.php' ;
if(isset($_POST[ 'submit' ]))
{
           $name = $_POST[ 'user' ];
          $email = $_POST[ 'email' ];
         $pass = $_POST['password'];

        $query = "  INSERT INTO register(Name, Email, Password ) VALUES ('$name', '$email', '$pass') ";
      $res = mysqli_query($conn,$query);
       if($res)
{
          header('location: login.php');
}
 mysqli_close($conn);
}

?>
