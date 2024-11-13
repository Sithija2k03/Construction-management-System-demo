<!--Insert inventory table data into database -->
<?php
   // require ('Connection.php');

   // if(isset($_POST['submit2']))
   // {
   //  $Client_Name = $_POST["Client_Name"];
   //  $Client_Address = $_POST["Client_Address"];
   //  $Client_C_No= $_POST["Client_C_No"];
   //  $Project_ID = $_POST["Project_ID"];
   //  $Utilization_Date = $_POST["Utilization_Date"];
   //  $Quantity = $_POST["Quantity"];
   //  $Used_Material = $_POST["Used_Material"];
   //  $Unit_Price = $_POST["Unit_Price"];
 

   // $sql="INSERT INTO utilization(Client_Name,Client_Address,Client_C_No,Project_ID,Utilization_Date,Quantity,Used_Material,Unit_Price) 
   // VALUES ('$Client_Name','$Client_Address','$Client_C_No','$Project_ID','$Utilization_Date','$Quantity','$Used_Material','$Unit_Price')";

   // if(mysqli_query($connection,$sql))
   // {
   //  echo
   //  "Data Inserted Sucesssfully";
   // }
   // else{
   //    die("Error".mysqli_error($connection));
   // }
   // }
   // header('location/Pinithi/Inventory.html');

   require ('Connection.php');

   if(isset($_POST["submit2"]))
   {
    $Client_Name = $_POST["Client_Name"];
    $Client_Address = $_POST["Client_Address"];
    $Client_C_No= $_POST["Client_C_No"];
    $Project_ID = $_POST["Project_ID"];
    $Utilization_Date = $_POST["Utilization_Date"];
    $Quantity = $_POST["Quantity"];
    $Used_Material = $_POST["Used_Material"];
    $Unit_Price = $_POST["Unit_Price"];
 

   $sql="INSERT INTO utilization(Client_Name,Client_Address,Client_C_No,Project_ID,Utilization_Date,Quantity,Used_Material,Unit_Price) 
   VALUES ('$Client_Name','$Client_Address','$Client_C_No','$Project_ID','$Utilization_Date ','$Quantity','$Used_Material','$Unit_Price')";

   if(mysqli_query($connection,$sql))
   {
    echo
    "Data Inserted Sucesssfully";
   }
   else{
      die("Error");
   }
   }
   header('location:/CMS/Payment.html');
?>
