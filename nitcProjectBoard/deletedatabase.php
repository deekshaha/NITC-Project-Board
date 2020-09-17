<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM form");
if(mysqli_num_rows($result) > 0 )
{
$sql = "DELETE FROM form WHERE ID=' " . $_GET["ID"] . " ' ";
if (mysqli_query($conn, $sql) ) {
   header('location:delete.php');
}
else
{
    echo "Error Deleting Record: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>