<?php 	
	session_start();
	//$_SESSION['username'] = 'm170368ca';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="styleCSS.css">
	<link rel="shortcut icon" href="favicon.png" />
	<link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
	<style type="text/css">
		button:hover{
			background-color: blue;
			transition: 1s;
		}
		table tr:hover{
			color: #A0090E;
			transition: 2s;
		}
		body{
			height: 200px;
  			background-color: blue; /* For browsers that do not support gradients */
  			background-image: linear-gradient(to right, blue , purple); /* Standard syntax (must be last) */
		}
		.box{

			background: transparent;

		}
	</style>
</head>
<body>
	
	
	
	
	<div class="box" style="width: 1200px; height: 570px; top:65%; transform: translate(-50%,-60%); border: 2px #03a9f4 solid;">
		
		<br>
			<?php       
        		require 'bootstrap.php';
				require 'config.php';        
                $roll = $POST_['roll'] = 'm170368ca';//= $_SESSION['username'] 
                
                $fetchStudent = "SELECT * FROM students WHERE roll='$roll'";
				$result = mysqli_query($conn, $fetchStudent);
				$students = mysqli_fetch_assoc($result);
				$hostelname = $students['hostel'];
				$fetchHostel = "SELECT * FROM hosteldetails WHERE hostelname='$hostelname'";
				$result = mysqli_query($conn, $fetchHostel);
				echo '<img src="data:image/jpeg;base64,'.base64_encode($students['photo'] ).'" height="160" width="128" class="img-thumnail" />';
				echo '  <a href="index.php">
						<button type="button" style="float: right;" class="buttonCSS" onclick="doLogout()">logout</button></a>'; 
			
				echo '<a href="progress_page.php"><button type="button" class="buttonCSS" value="progress_page" style="float:right;">Complaint Status</button></a>';
				echo '<a href="complaint.php"><button type="button" class="buttonCSS" value="new_complaint" style="float:right;">New Complaint</button></a>';
				
			
				echo "<div class=box style='width:600px; transform:translate(-100%,-30%);  background:transparent;'>";
				echo "<table cellpadding=5 style='color:black; font-family: Aldrich; font-size: 20px;'>";
				echo "<h2 style='text-align:left; color:white;'>Student Details</h2>";
				echo "<tr><td>Full Name</td><td align='right'>".$students['name']."</td></tr>";
				echo "<tr><td>Roll Number</td><td align='right'>".$students['roll']."</td></tr>";
				echo "<tr><td>Phone</td><td align='right'>".$students['phone']."</td></tr>";
				echo "<tr><td>Email</td><td align='right'>".$students['email']."</td></tr>";
				echo "<tr><td>Hostel</td><td align='right'>".$students['hostel']."</td></tr>";
				echo "<tr><td>Room No</td><td align='right'>".$students['room']."</td></tr></table></div>";
				
				echo '<h1 style="width:800px; font-size: 3em; font-family: Aldrich; top: 5%; right: 19%;" class="neon" data-text="neon">';
				echo '<center>'.$students['name']."'s Dashboard"."</center></h1>";
				
				echo "<div class=box style='width:550px; transform:translate(5%,-30%); background:transparent;'>";
				echo "<h2 style='text-align:left; color:white;'>Warden Details</h2>";
				echo "<table cellpadding=5 style='color:black; font-family: Aldrich; font-size: 20px;'>";
				while ($hosteldetails = mysqli_fetch_assoc($result)) {
					echo "<tr><td>Warden Name</td><td>".$hosteldetails['wardens']."</td></tr>";
					echo "<tr><td>Warden Email</td><td>".$hosteldetails['officephone']."</td></tr>";
					echo "<tr><td>Warden Phone</td><td>".$hosteldetails['mobile']."</td></tr>";
				}
				echo "</table></div></div>";
            ?>
	</div>
	<script type="text/javascript">
		function doLogout() {
			<?php
				if(isset($_SESSION['username'])){
					session_destroy();
				}
			?>
		}
	</script>
</body>
</html>