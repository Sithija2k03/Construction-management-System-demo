<?php
session_start();
include('DBconnect.php');


$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM r_user WHERE Email='$email'";
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);

    
    if($row['Password'] === $pass){
        
        $_SESSION['uid'] = $row['User_ID'];
        $_SESSION['fname'] = $row['First_name'];
        $_SESSION['lname'] = $row['Last_name'];
        $_SESSION['email'] = $row['Email'];

        
        header("location: userInterface.php");
        exit();
    } else {
        // Incorrect password
        echo "Login Failed! Please check your username/password, or create an account.";
    }
} else {
    // User not found
    echo "Login Failed! Please check your username/password, or create an account.";
}

mysqli_close($connection);
?>
