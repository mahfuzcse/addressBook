<?php

include "db.php";
session_start();


if(!isset($_SESSION['username'])){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RECORD</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<div class="row">
     <div class="large-10 columns">
         <h2>All contact information</h2>
     </div>  
   </div>

<div class="large-12 columns">
     <table border="1" width="100%">
            <tr>
            	<th bgcolor="skyblue"><strong>Id</strong></th>
            	<th bgcolor="skyblue"><strong>First Name</strong></th>
            	<th bgcolor="skyblue"><strong>Last Name</strong></th>
            	<th bgcolor="skyblue"><strong>Date of Birth</strong></th>
            	<th bgcolor="skyblue"><strong>Cell Phone NO.</strong></th>
            	<th bgcolor="skyblue"><strong>Email</strong></th>
            	<th bgcolor="skyblue"><strong>Action</strong></th>
            </tr>
</div>

<?php
include "db.php";

$record = mysqli_query($conn, "SELECT * FROM users");
while ($data = mysqli_fetch_assoc($record)) 
{
  ?>
  <div class="large-12 columns">
  <tr>
  <td><?php echo $data['id']; ?></td>
  <td><?php echo $data['fname']; ?></td>
  <td><?php echo $data['lname']; ?></td>
  <td><?php echo $data['dob']; ?></td>
  <td><?php echo $data['cellphn']?></td>
  <td><?php echo $data['email']; ?></td>

  <td>
      <ul class="button-group round">
            <li><a href="edit.php?id=<?php echo $data['id']; ?>" class="button tiny" data-reveal-id="myModal">Edit</a></li>
            <li><a href="del.php?id=<?php echo $data['id']; ?>" class="button tiny alert">Delete</a></li>
      </ul>
  </td>

  </tr>
</div>
   <?php
}

?>
</table>
<a href="index.php" class="button tiny success" ><strong>Add Contact</strong></a>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
</body>
</html>