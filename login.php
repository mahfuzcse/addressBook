<?php
      session_start();
      $db = mysqli_connect("localhost","root","","my_db"); 

      if(isset($_SESSION['username'])){
        header('Location: index.php');
      }
      
          if (isset($_POST['register'])) {
      //  session_start();
        $username = $_POST['username'];
        $password = $_POST['pw'];
           $password = sha1($password);

            
          $sql = "SELECT * FROM registration WHERE username='$username' AND pw='$password'";
          $check=mysqli_query($db,$sql);

           
         // $db->query($sql);
         
          if(mysqli_num_rows($check)==1){
                      $_SESSION['username']=$username;
                      header("location: index.php");
                      
            }
         else
                {
                    echo "wrong";
                }
}

?>



<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
</head>

<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<body>
  <h2>Please login valid input</h2>


    <form method="post" actio="login.php">
        
        <div class="imgcontainer">
          <img src="img1.png" alt="Avatar" class="Avatar">
        </div>
      
    <div class="container">
       <label><b>Username: </b></label>
       <input type="text" placeholder="Enter Username" name="username" class="textInput" required>
  
      <label><b>Password: </b></label>
      <input type="password" placeholder="Enter Password" name="pw" class="textInput" required>
  
  <!--    <tr>
          <td>Username: </td>
          <td><input type="text" name="username" class="textInput"></td>
        </tr>
           
        <tr>
          <td>Password: </td>
          <td><input type="password" name="pw" class="textInput"></td>
        </tr>
-->

       <button type="submit" name="register">Login</button>
  
       <!-- <tr>
          <td>Submit: </td>
          <td><input type="submit" name="register_btn" ></td>
        </tr>
      </table>-->
       </div>
    </form>

</body>
</html>