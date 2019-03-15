<?php
	session_start();
	session_destroy();
	require 'config.php';

    $username=$password="";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $username=strtolower(trim($_POST['username']));
      $password=trim($_POST['password']);
      $sql="SELECT roll, password FROM students WHERE roll='$username' AND password='$password';";
      echo $username.','.$password;
      $query = mysqli_query($conn,$sql);

      if(mysqli_num_rows($query)>0)
      {
        echo"<script>alert('You are signed in successfully.')</script>";
        session_start();
     	$_SESSION['username'] = $username;
        header('Location:index.php');
      }
      else
      {
        echo"<script>alert('Username or Password is incorrect')</script>"; 
      }
    }
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<title>Login Form</title>
<meta charset="UTF-8">
<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	.login {
  width: 400px;
}
	.login input{
		width: 100%;
	}

</style>
</head>
<body>

<!-- html form login -->
<div class="login">
  <div class="login-triangle"></div>
  <h2 class="login-header">Log in</h2>
  <form class="login-container" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
    <p><input type="text" placeholder="Email/Roll Number" name="username" id="username"></p>
    <p><input type="password" placeholder="Password" name="password" id="password"></p>
    <p><input type="submit" value="Log in"></p>
  </form>
</div>

<!-- javascript section -->


</div>
<script type="text/javascript" src="script.js"></script>
      </body>
</head>