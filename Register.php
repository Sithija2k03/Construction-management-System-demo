<?php

 include('DBconnect.php');

 if(isset($_POST['submit'])){
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $DOB = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Contact_No = $_POST['Contact_No'];
    $Password = $_POST['Password'];

    
    $sql = "INSERT INTO r_user (First_name, Last_name, DOB, Gender, Address, Email, Contact_No, Password) 
            VALUES ('$First_name', '$Last_name', '$DOB', '$Gender', '$Address', '$Email', '$Contact_No', '$Password')";

    mysqli_query($connection, $sql);
    echo "<script> location.href='index.php'; </script>";
        exit;



 }
//$connection->close();
mysqli_close($connection);
?>