<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <style>
    form.update-form input{
    padding: 8px 50px; /* Padding for better spacing */
    border: 1px solid #ccc; /* Light border */
    border-radius: 5px; /* Rounded corners */
    font-size: 14px; /* Consistent font size */
    color: #333; /* Text color */

}
.fieldset{
    background-color:#C0C0C0;  /*Silver color background*/
    justify-content: center; /* Center horizontally */
    align-items: center;
    width: 50%; /* Set width to 50% of parent */
    margin: auto; /* Center horizontally */
    padding: 20px; /* Padding for spacing */
    border: 1px solid #ddd; /* Light border */
    border-radius: 10px; /* Optional rounded corners */
    text-align: left; /* Align text to the left */
}
.edit{
    background-color:green;
    padding:10px 25px;
    color:white;
    font-size:15px;
    border:none;
    border-radius:5px;
    margin-left: 30px;
}
    </style>
</head>
<body>
<?php 
                 include 'Connection.php';

                if(isset($_GET['Utilization_No'])) {
                    $Utilization_No=$_GET['Utilization_No'];  /*get row details to update*/
                    $sql="SELECT * from utilization WHERE Utilization_No=$Utilization_No";
                    $result= mysqli_query($connection, $sql);
                    $row=mysqli_fetch_array($result);    

                    ?>
                 <form class="update-form" action="updateU.php" method="POST">
        <fieldset class="fieldset">
            <legend><h2>UTILIZATION</h2></legend> 
            Client Name:
            <input type="text" name = "Client_Name"  value="<?php  echo $row['Client_Name']; ?>">
            <br>
            <br>
            Client Address:
            <input type="text" name = "Client_Address" value="<?php  echo $row['Client_Address']; ?>">
            <br>
            <br>
            Client Contact No :
            <input type="tel" name = "Client_C_No" value="<?php  echo $row['Client_C_No']; ?>" >
            <br>
            <br>
            Project ID:
            <input type="text" name="Project_ID" value="<?php  echo $row['Project_ID']; ?>" >
            <br>
            <br>    
            Utilization Date :
            <input type="date" name = "Utilization_Date" value="<?php  echo $row['Utilization_Date']; ?>" >
            <br>
            <br>
            Quntity :
            <input type = "text" name ="Quantity" value="<?php  echo $row['Quantity']; ?>" >
            <br>
            <br>
            Used Material:
            <input type = "text" name = "Used_Material" value="<?php  echo $row['Used_Material']; ?>" >
            <br>
            <br>
            Unit Price:
            <input type = "text" name = "Unit_Price" value="<?php  echo $row['Unit_Price']; ?>" >
            <br>
            <br>

            <input type="hidden" name="Utilization_No" value="<?php echo $row['Utilization_No'];?>">
            <button type="submit" name="update2" class="edit">Update</button>
        </fieldset>

             <?php
                }
              
              ?>    
    
</body>
</html>



    