<?php
include "db.php";

session_start();


if(!isset($_SESSION['username'])){
  header('Location: login.php');
}

if(isset($_POST['done']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob   = $_POST['dob'];
$cellphn = $_POST['cellphn'];
$email = $_POST['email'];

$insert = mysqli_query($conn, "INSERT INTO users (fname, lname, dob, cellphn, email) 
	VALUES ('$fname','$lname','$dob',$cellphn,'$email')");

if (!$insert) {
	echo mysqli_error($insert);
}else{

	echo "Inserted";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>INDEX</title>
	<link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<form method="POST" >
   <div class="row">
     <div class="large-8 columns">
         <h2>Add new contact information</h2>
     </div>  
   </div>
  
   <div class="row"> 
       <div class="large-6 columns">
	      <label><strong>First Name </strong><input type="text" name="fname" placeholder="First name"></label>
       </div>
    </div>

    <div class="row"> 
      <div class="large-6 columns">
	   <label><strong>Last Name</strong> <input type="text" name="lname" placeholder="Last name"></label>
	  </div>
    </div> 

     <div class="row"> 
      <div class="large-6 columns">
	   <label><strong>Date of birth </strong><input type="text" name="dob" placeholder="Date of birth"></label>
	  </div>
    </div> 
    
    <div class="row"> 
      <div class="large-6 columns">
	   <label><strong>Cell Phone NO. </strong><input type="text" name="cellphn" placeholder="cell Phone number"></label>
	  </div>
    </div>

    <div class="row"> 
	    <div class="large-6 columns">
	       <label><strong>Email </strong><input type="text" name="email" placeholder="Email"></label>
        </div>
    </div>
    
    <div class="row"> 
          <div class="large-2 columns">
	         <label>
	          <input type="submit" name="done" class="button tiny success" value="ADD">
             </label>
          </div>

          <div class="large-2 columns">
           
            <a href="record.php" class="button tiny success"><strong>Record</strong></a>
          
          </div>
          <div class="large-2 columns">
          <a href="logout.php" class="button tiny success"><strong>Logout</strong></a>
          </div>
          
          <div class="large-2 columns">
          <a href="login.php" class="button tiny success"><strong>Login</strong></a>
          </div> 

          <div class="large-2 columns">
          <a href="form.php" class="button tiny success"><strong>Registration</strong></a>
          </div>
    </div>  

</form>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
</body>
</html>


