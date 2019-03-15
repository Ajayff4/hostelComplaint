<?php
  require 'config.php';
  session_start();
  $_SESSION['username'] = "M170368CA";

    $category=$subCategory=$desc=$problemPic=$tokenid="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $category=trim($_POST['select1']);
      $subCategory=trim($_POST['subComplaintName']);
      $subCategory= $_GET['subComplaintName'];
      @$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));  //SQL Injection defence!
      $desc=trim($_POST['desc']);
      $tokenid="TOKEN".rand(100,999);
      $sroll = $_SESSION['username'];
      $sql="INSERT INTO complaints VALUES('$tokenid', '$sroll', '$category', '$subCategory', '$desc', '$image');";
      echo "results".$tokenid.$sroll.$category.$subCategory.$desc;
      mysqli_query($conn,$sql);
      header('Location:dashboard.php');
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
<title>Complaint Form</title>
<meta charset="UTF-8">
<meta id="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
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
    <h2 class="login-header">COMPLAINT FORM</h2>
    <form method="POST" class="login-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
      <p>
        <?php
          require 'config.php';
          $sql = "SELECT * FROM complainttype;";
          $result = mysqli_query($conn, $sql);

          echo "<select name='select1' id='select1' background='transparent'><option value=''>Choose Category</option>";
          while ($row = mysqli_fetch_array($result)) {
              echo "<option value='" . $row['ctype'] . "'>" .$row['ctype'] . "</option>";
          }
          echo "</select>";
        ?>


        <?php
          require 'config.php';
          $sql = "SELECT * FROM subcomplainttype;";
          $result = mysqli_query($conn, $sql);

          echo "<select name='select2' id='select2' style='float:right;'><option value='' >Choose Category</option>";
          while ($row = mysqli_fetch_array($result)) {
              echo "<option value='" . $row['ctype'] . "'>" .$row['subComplaintName']."</option>";
              $_GET['subComplaintName'] = $row['subComplaintName'];
          }
          echo "</select>";

        ?>
      </p>
      <p>
        <textarea placeholder="Give brief description about your problem" name="desc" rows=5 cols=104 style="border-radius: 5px;"></textarea>
      </p>
      

      <p>
        <input type="file" id="image" name="image" onchange="validatePhotoUpload(this.value);" style="background:red; height:56px;" >
        <input type="submit" style="float:right; " value="Log in" id="submit" id="submit" onclick="return formValidator();">
      </p>  
      <p style="color: red;">*Image upload is not mandatory</p>
    </form>
  </div>
</div>
<script type="text/javascript" src="ajax.js">
  
</script>
<script type="text/javascript" src="script.js"></script>
</body>
</head>
</html>