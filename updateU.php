<?php
include('Connection.php');

if(isset($_POST['update2'])) {
    $Client_Name = $_POST["Client_Name"];
    $Client_Address = $_POST["Client_Address"];
    $Client_C_No= $_POST["Client_C_No"];
    $Project_ID = $_POST["Project_ID"];
    $Utilization_Date = $_POST["Utilization_Date"];
    $Quantity = $_POST["Quantity"];
    $Used_Material = $_POST["Used_Material"];
    $Unit_Price = $_POST["Unit_Price"]; 
    $Utilization_No = $_POST["Utilization_No"];  //To specify primary key to update
   
    $sql = "UPDATE utilization set Client_Name='$Client_Name',Client_Address='$Client_Address',Client_C_No='$Client_C_No', Project_ID='$Project_ID',Utilization_Date='$Utilization_Date',Quantity=' $Quantity',Used_Material='$Used_Material',Unit_Price='$Unit_Price' 
    WHERE Utilization_No=$Utilization_No";
  
   if(mysqli_query($connection, $sql)) {
    echo "Record Updated successfully!";
   }
   else{
    die("Error");
   }
  
   }
  
  header('location:/CMS/read.php');
  ?>