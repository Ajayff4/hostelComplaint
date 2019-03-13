<?php
//Include the database configuration file
include 'config.php';

if(!empty($_POST["category"])){
    //Fetch all state data
    $sql="SELECT * FROM subcomplainttype WHERE ctype = ".$_POST['category'];
    $result=mysqli_query($conn, $sql);
    
    //State option list
    if(mysqli_num_rows($result)>0){
        echo '<option value="">Select SubComplaint Type</option>';
        while($row = mysqli_fetch_assoc($result)){ 
            echo '<option value="'.$row['subComplaintName'].'">'.$row['subComplaintName'].'</option>';
        }
    }else{
        echo '<option value="">Complaint Type not available</option>';
    }
}elseif(!empty($_POST["state_id"])){
    //Fetch all city data
    
}
?>