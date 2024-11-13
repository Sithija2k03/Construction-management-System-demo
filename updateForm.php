<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if the form was submitted
    if (isset($_POST['edit'])) {
        // Retrieve form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $uid =  $_POST['id'];
        
        // Establish a database connection
        $conn = new mysqli('localhost', 'root', '', 'cms_project management');
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "UPDATE r_user SET First_name='$fname', Last_name='$lname', Contact_No='$phone', Email='$email' WHERE User_ID=$uid"; // Assuming $id is the user ID
        if ($conn->query($sql) === TRUE) {
            echo "User data updated successfully";
            header("Location: userProfile.php");
        } else {
            echo "Error updating user data: " . $conn->error;
        }
        
        // Close the database connection
        $conn->close();
    } else {
        echo "Invalid request";
    }
} else {
    echo "Method not allowed";
}
?>
