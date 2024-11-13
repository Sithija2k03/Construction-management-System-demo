<?php
include('Connection.php');

if(isset($_POST['update3'])) {
    $Project_ID = $_POST["Project_ID"];
    $Pay_Date = $_POST["Pay_Date"];
    $Total_Amount = $_POST["Total_Amount"];
    $Paid_Amount = $_POST["Paid_Amount"];
    $Due_Amount = $_POST["Due_Amount"];
    $Pay_Type = $_POST["Pay_Type"];
    $Pay_Description = $_POST["Pay_Description"];
    $Pay_ID = $_POST["Pay_ID"] ;  //To specify primary key to update
   
    $sql = "UPDATE payment set  Project_ID='$Project_ID', Pay_Date='$Pay_Date',Total_Amount=' $Total_Amount',Paid_Amount='$Paid_Amount',Due_Amount='$Due_Amount', Pay_Type='$Pay_Type',Pay_Description='$Pay_Description'
    WHERE Pay_ID=$Pay_ID";
  
   if(mysqli_query($connection, $sql)) {
    echo "Record Updated successfully!";
   }
   else{
    die("Error");
   }
  
   }
  
  header('location:/CMS/read.php');
  ?>