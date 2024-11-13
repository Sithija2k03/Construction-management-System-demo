<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <style>
    form.update-form input{
    padding: 8px 50px; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
    font-size: 14px; 
    color: #333;

}
.fieldset{
    background-color:#C0C0C0; 
    justify-content: center; 
    align-items: center;
    width: 50%; /* Set width to 50% of parent */
    margin: auto; 
    padding: 20px; 
    border: 1px solid #ddd; 
    border-radius: 10px; 
    text-align: left; 
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

                if(isset($_GET['Pay_ID'])) {
                    $Pay_ID=$_GET['Pay_ID'];
                    $sql="SELECT * from payment WHERE Pay_ID=$Pay_ID";
                    $result= mysqli_query($connection, $sql);
                    $row=mysqli_fetch_array($result);

                    ?>
             <form  class="update-form" action="updateP.php" method="POST">
        <fieldset class="fieldset">
            <legend><h2>PAYMENT</h2></legend>
             Project ID :
            <input type="text" name = "Project_ID" value="<?php  echo $row['Project_ID']; ?>">
            <br>
            <br>
            Payment Date : 
            <input type="date" name = "Pay_Date" value="<?php  echo $row['Pay_Date']; ?>">
            <br>
            <br>
            Total Amount :
            <input type="text" name ="Total_Amount" value="<?php  echo $row['Total_Amount']; ?>">
            <br>
            <br>
            Paid Amount :
            <input type="text" name ="Paid_Amount" value="<?php  echo $row['Paid_Amount']; ?>">
            <br>
            <br>
            Due Amount :
            <input type="text" name ="Due_Amount" value="<?php  echo $row['Due_Amount']; ?>">
            <br>
            <br>
            Payment Type :
            <select name="Pay_Type" id="payment">
                <option value="">--select--</option>
                <option value="Card" <?php if($row['Pay_Type']=="Card"){echo "selected";} ?>>Card</option>
                <option value="Cash" <?php if($row['Pay_Type']=="Cash"){echo "selected";} ?>> Cash</option>
            </select>
            <br>
            <br>
            Payment Description :
            <select name="Pay_Description" id="paymentS">
                <option value="">--select--</option>
                <option value="Successful" <?php if($row['Pay_Description']=="Successful"){echo "selected";} ?>>Successful</option>
                <option value="Pending" <?php if($row['Pay_Description']=="Pending"){echo "selected";} ?>>Pending</option>
                <option value="Declined" <?php if($row['Pay_Description']=="Declined"){echo "selected";} ?>>Declined</option>
                </select>

                <input type="hidden" name="Pay_ID" value="<?php echo $row['Pay_ID'];?>">
                <button type="submit" name="update3" class="edit">Update</button>
            </fieldset>



             <?php
                }
              
              ?>    
    
</body>
</html>