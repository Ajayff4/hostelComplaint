<?php
  require 'config.php';
    $name=$hostel=$roll=$room=$email=$mobile=$course=$branch=$question=$answer=$password=$rePassword="";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $name=strtolower(trim($_POST['name']));
      $hostel=trim($_POST['hostel']);
      $roll=strtolower(trim($_POST['roll']));
      $email=strtolower(trim($_POST['email']));
      $mobile=trim($_POST['mobile']);
      $course=strtolower(trim($_POST['course']));
      $branch=strtolower(trim($_POST['branch']));
      $question=trim($_POST['question']);
      $answer=trim($_POST['answer']);
      $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));  //SQL Injection defence!
      $password=strtolower(trim($_POST['password']));
      $rePassword=strtolower(trim($_POST['rePassword']));
      
      $sql="INSERT INTO students VALUES('$roll', '$name', '$mobile', '$email', '$hostel', '$room', '$photo', '$password', '$course', '$branch', '$question', '$answer');";
      echo "results".$name.$roll.$hostel.$room.$email.$mobile.$course.$branch.$question.$answer.$password;
      mysqli_query($conn,$sql);
      /*
      if(mysqli_query($conn,$sql))
      {
        echo "<script>alert('Your records are saved successfully.')</script>";
        //header('Location:index.html');
      }
      else
      {
        echo"<script>alert('Error generated !!!')</script>"; 
      }*/
    }
    //mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<title>SignUp Form</title>
<meta charset="UTF-8">
<meta id="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
  select{
    width: 49%;
    height: 56px;
    border-color: black;
    color: #999;
  }
</style>

</head>
<body>

<!-- html form login -->
<div class="login">
  <div class="login-triangle"></div>
    <h2 class="login-header">SignUp</h2>
    <form method="POST" class="login-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
      <p>
        <input type="text" placeholder="Name" id="name" name="name">
        <?php
        require 'config.php';
        $sql = "SELECT * FROM hostels;";
        $result = mysqli_query($conn, $sql);

        echo '<select name="hostel" id="hostel" style="float:right;"><option value="">Choose hostel</option>';
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['hostelname'] . "'>" . $row['hostelname'] . "</option>";
        }
        echo "</select>";
        ?>
      </p>
      <p>
        <input type="text" placeholder="Roll-No" id="roll" name="roll"><input type="text" style="float:right;" placeholder="Room-No" id="room" name="room">
      </p>
      <p>
        <input type="text" placeholder="Email" id="email" name="email"><input type="text" style="float:right;" placeholder="Mobile" id="mobile" name="mobile">
      </p>
      <p>
        <input type="text" placeholder="Course" id="course" name="course"><input type="text" style="float:right;" placeholder="Branch" id="branch" name="branch">
      </p>
      <p>
        <input type="password" placeholder="password" id="password" name="password">
        <?php
        require 'config.php';
        $sql = "SELECT * FROM questions;";
        $result = mysqli_query($conn, $sql);

        echo '<select name="question" id="question" style="float:right;"><option value="">Choose security question</option>';
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['questions'] . "'>" . $row['questions'] . "</option>";
        }
        echo "</select>";
        ?>
      </p>
      <p>
        <input type="password" placeholder="Repeat Password" id="rePassword" name="rePassword"><input type="text" style="float:right;" placeholder="Answer" id="answer" name="answer">
      </p>
      <p>
        <input type="file" id="photo" name="photo" onchange="validatePhotoUpload(this.value);" style="background:red; height:56px;" >
        <input type="submit" style="float:right; " value="Log in" id="submit" id="submit" onclick="return formValidator();">
      </p>  
    </form>
  </div>
</div>
<script type="text/javascript" src="script.js"></script>
</body>
</head>
</html>