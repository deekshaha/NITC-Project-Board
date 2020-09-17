<?php 

 include_once 'connection.php' ;
if(isset($_POST[ 'submit' ]))
{
           $name = $_POST[ 'yourname' ];
          $user = $_POST[ 'subject' ];

        $query = "  INSERT INTO  form(Name,Project ) VALUES ('$name', '$user') ";
      $res = mysqli_query($conn,$query);
       if($res)
            {
               header('location: delete.php');
            }

 mysqli_close($conn);
}

?>
