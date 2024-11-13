<?php

require ('Connection.php');

   if(isset($_POST["submit3"]))
   {
    $Project_ID = $_POST["Project_ID"];  // sent details to database (insert)
    $Pay_Date = $_POST["Pay_Date"];
    $Total_Amount = $_POST["Total_Amount"];
    $Paid_Amount = $_POST["Paid_Amount"];
    $Due_Amount = $_POST["Due_Amount"];
    $Pay_Type = $_POST["Pay_Type"];
    $Pay_Description = $_POST["Pay_Description"];
 

   $sql="INSERT INTO payment(Project_ID,Pay_Date,Total_Amount,Paid_Amount,Due_Amount,Pay_Type,Pay_Description)
   VALUES ('$Project_ID','$Pay_Date','$Total_Amount','$Paid_Amount','$Due_Amount','$Pay_Type','$Pay_Description' )";

   if(mysqli_query($connection,$sql))
   {
    echo
    "Data Inserted Sucesssfully";
   }
   else{
      die("Error");
   }

} 
header('location:/CMS/read.php');
?>