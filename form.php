<?php
		  session_start();
		  $db = mysqli_connect("localhost","root","","my_db"); 
		  
          if (isset($_POST['register_btn'])) {
		  //	session_start();
		  	$username = $_POST['username'];
		 	  $email = $_POST['email'];
		  	$pw = $_POST['password'];
		  	$pw2 = $_POST['password2'];
        
		  	    if ($pw == $pw2) {
		  		  //create user
		  		        $pw = sha1($pw);
		  		        $sql = "INSERT INTO registration (username,email,pw) VALUES('$username','$email','$pw')";
		  		        $check=mysqli_query($db,$sql);
                if($check)
                   {
                      unset($_SESSION['username']);
                      header("location: login.php");
                   }
                else
                {
                    echo "Something wrong";
                }
		  		//$_SESSION['message'] = "You are now loged in";
		  		//$_SESSION['username'] = $username;
		  		//header("location: home.php");
		  	}else{
                  echo $_SESSION['message'] = "The two password do not match";
		  	}

      }


?>



<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>


<body>
	<h1>For Register</h1>

    <form method="post" action="form.php" style="border:1px solid #ccc">
        <div class="container">
             <label><b>Username</b></label>
             <input type="text" placeholder="Enter Username" name="username" class="textInput" required>
        
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" class="textInput" required>
        
             <label><b>Password</b></label>
             <input type="password" placeholder="Enter Password" name="password" class="textInput" required>
              
             <label><b>Repeat password</b></label>
             <input type="password" placeholder="Enter Password" name="password2" class="textInput" required>

        </div>
      <!--<tr>
          <td>Username: </td>
          <td><input type="text" name="username" class="textInput"></td>
        </tr>
    		
    		<tr>
    			<td>Email: </td>
    			<td><input type="email" name="email" class="textInput"></td>
    		</tr>        
    		<tr>
    			<td>Password: </td>
    			<td><input type="password" name="password" class="textInput"></td>
    		</tr>
    		<tr>
    			<td>Password again: </td>
    			<td><input type="password" name="password2" class="textInput"></td>
    		</tr>-->

          <button type="submit" name="register_btn">Submit</button>
    			
    			<!--<input type="submit" name="register_btn" >-->
    </form>

</body>
</html>