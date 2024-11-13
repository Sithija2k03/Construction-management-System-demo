<?php
include('Connection.php');

if(isset($_POST['update1'])) {
    $Item_Name = $_POST["Item_Name"];
    $Project_ID = $_POST["Project_ID"];
    $Quantity = $_POST["Quantity"];
    $Unit_Price = $_POST["Unit_Price"];
    $Item_ID = $_POST["Item_ID"];    //To specify primary key to update
   
    $sql = "UPDATE inventory set Item_Name='$Item_Name', Project_ID='$Project_ID',Quantity=' $Quantity',Unit_Price='$Unit_Price' 
    WHERE Item_ID=$Item_ID";
  
   if(mysqli_query($connection, $sql)) {
    echo "Record Updated successfully!";
   }
   else{
    die("Error");
   }
  
   }
  
  header('location:/CMS/read.php');
  ?>