<!--Insert inventory table data into database -->
<?php
   require ('Connection.php');

   if(isset($_POST["submit1"]))
   {
    $Item_Name = $_POST["Item_Name"];
    $Project_ID = $_POST["Project_ID"];
    $Quantity = $_POST["Quantity"];
    $Unit_Price = $_POST["Unit_Price"];
 

   $sql="INSERT INTO inventory(Item_Name,Project_ID,Quantity,Unit_Price) VALUES ('$Item_Name','$Project_ID','$Quantity','$Unit_Price')";

   if(mysqli_query($connection,$sql))
   {
    echo
    "Data Inserted Sucesssfully";
   }
   else{
      die("Error");
   }
   }
   header('location:/CMS/Utilization.html');
?>
