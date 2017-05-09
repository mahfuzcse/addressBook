<?php
include "db.php";
session_start();


if(!isset($_SESSION['username'])){
  header('Location: login.php');
}

$id = $_GET['id'];

$m = mysqli_query($conn, "SELECT * from users WHERE id='$id'");
$check = mysqli_fetch_assoc($m);

if(isset($_POST['done']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob   = $_POST['dob'];
$cellphn = $_POST['cellphn'];
$email = $_POST['email'];

$edit = mysqli_query($conn, "UPDATE users SET fname='$fname',lname='$lname',dob='$dob',cellphn='$cellphn',email='$email' WHERE id = '$id'"); 

if (!$edit) {
	echo mysqli_error($edit);
}else{

	 header("location:record.php");
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login</title>
	<link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<form method="POST">

     <div class="row">
        <div class="large-12 columns">
             <h2>Edit form</h2>        	
        </div>
     	
     </div>


     <div class="row"> 
       <div class="large-6 columns">
          <label><strong>First Name</strong> 
              <input type="text"  name="fname"  value="<?php echo $check['fname'];?>" placeholder="<?php echo $check['fname'];?>">
          </label>
       </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
           <label><strong>Last Name</strong>
              <input type="text"  name="lname"  value="<?php echo $check['lname'];?>" placeholder="<?php echo $check['lname'];?>">
           </label> 
        </div>
       </div>

      <div class="row">
       <div class="large-6 columns">
           <label><strong>Date of Birth</strong>
              <input type="text"  name="dob"    value="<?php echo $check['dob'];?>"   placeholder="<?php echo $check['dob'];?>">
           </label> 
       </div>
      </div>
      <div class="row">
        <div class="large-6 columns">
           <label><strong>Cell Phone NO.</strong>
              <input type="text"  name="cellphn" value="<?php echo $check['cellphn'];?>"   placeholder="<?php echo $check['cellphn'];?>">
           </label> 
       </div>     
      </div> 

      <div class="row">
       <div class="large-6 columns">
           <label><strong>Email</strong>
              <input type="text"  name="email"  value="<?php echo $check['email'];?>" placeholder="<?php echo $check['email'];?>">
           </label> 
       </div>     
      </div>
       
       <div class="row">
       <div class="large-8 columns">
        <button type="submit" name="done">Update</button>
       </div>  
       </div>
</div>
</form>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>

</body>
</html>

	