<?php
session_start();

include_once 'config.php';

//Retrieve data from POST request
$category = $_POST["CategoryName"];
$workers = $_POST["Workers"];

//Prepare the SQL query
$sql = "INSERT INTO labor(Work_Category,No_Of_Workers) VALUES ('$category','$workers')";

// Execute the query
if ($conn->query($sql) === TRUE)
{
    echo "Record inserted successfully";
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();


?>