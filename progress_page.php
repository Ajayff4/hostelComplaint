<?php 
	require 'bootstrap.php';
	require 'config.php';
	session_start();
	$_SESSION['username'] = "M170368CA";
	/*if($_SERVER["REQUEST_METHOD"]=="POST" and isset($_POST['submit']))
    {
        $GLOBALS['category']=trim($_POST['category']);
    }*/
?>

<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
	<title>Welcome to Complaint Progress Page</title>
	<style type="text/css">
		input[type="submit"],button{
	      background: transparent;
		  border: none;
		  outline: none;
		  color: #fff;
	      background: #03a9f4;
		  padding: 10px 20px;
	      cursor: pointer;
		  border-radius: 5px; 
		}
		body{
		  background: url('leaderboardBG.jpg');
		  background-repeat: no-repeat;
		  background-size: cover;
		  font-family: 'Andika';/*Nunito*/
		  color: lime;
		}
	</style>
	<link rel="shortcut icon" href="favicon.jpg" />
</head>
<body>
	<a href="dashboard.php"><button>DASHBOARD</button></a>
	<div class="container">
		<?php
			require 'config.php';
			$roll = $_SESSION['username'];
			$sql = "SELECT * FROM complaints WHERE sroll='$roll'";
			$result = mysqli_query($conn, $sql);
			$i=1;
			echo '<table class="table table-dark table-striped" style="color: #03a9f4; font-size :20px;">';
			echo '<tr style="color: white;"><th>SR NO</th><th>TOKEN ID</th><th>COMPLAINT TYPE</th><th>STATUS</th></tr>';
			while ($row = mysqli_fetch_assoc($result)) {
			    echo "<tr><td>" . '#' .$i++ . "</td><td>" .$row['tokenid'].'</td><td>' . $row['ComplaintSubtype'] .  "</td><td>" . $row['status'] . "</td></tr>";
			}
			echo "</table>";
		?>
	</div>
	
</body>
</html>