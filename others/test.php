
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<select id="category">
    <option value="">Select Complaint Category</option>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM complainttype;";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){ 
            echo '<option value="'.$row['ctype'].'">'.$row['ctype'].'</option>';
        }
    }else{
        echo '<option value="">Country not available</option>';
    }
    ?>
</select>

<select id="subCat">
    <option value="">Select SubComplaint Category</option>
</select>

</body>
</html>
