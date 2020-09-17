<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM form");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="welcome.css">
<title>Projects</title>

   
</head>
<body style="background-image: url('walls.jpg');">
  <a href="home.html"><button>GO BACK TO HOME PAGE</button></a>
  
  <div class="clearfix" id="notess">
  <div class="wrapper">
    <h2>PROJECTS</h2>
  </div>
  
      <?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<div class="<?php if(isset($classname)) echo $classname;?>">

      <div class="note">
        <h3>Project Title: | Posted By:</h3>
        <p class="title">
          <?php echo $row["Name"]; ?>
        </p>
        <h3>Project Description and Details:</h3>
        <p class="content">
          <?php echo $row["Project"]; ?> 
        </p>  
        <div ><a href="deletedatabase.php?ID=<?php echo $row["ID"]; ?>"><button>Delete Project</button></a><div>      
      </div>     
</div>
      <hr>
    	<?php
	$i++;
	}
	?>
</div>

</body>
</html>