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
    width: 50%; 
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

                if(isset($_GET['Item_ID'])) {
                    $Item_ID=$_GET['Item_ID'];
                    $sql="SELECT * from inventory WHERE Item_ID=$Item_ID";
                    $result= mysqli_query($connection, $sql);
                    $row=mysqli_fetch_array($result);

                    ?>

    <form class="update-form" action="updateI.php" method="POST">
    <fieldset class="fieldset">
        <legend><h2>INVENTORY</h2></legend>
                        Item_Name:
                        <select name="Item_Name" >
                                <option value="material1">--select--</option>
                                <option value="DSK Bricks" <?php if($row['Item_Name']=="DSK Bricks"){echo "selected";} ?>>DSK Bricks</option>
                                <option value="UltraTech portland Cement" <?php if($row['Item_Name']=="UltraTech portland Cement"){echo "selected";} ?>> UltraTech portland Cement</option>
                                <option value="Porcelain Tiles" <?php if($row['Item_Name']=="Porcelain Tiles"){echo "selected";} ?>>Porcelain Tiles</option>
                                <option value="Natural River Sand" <?php if($row['Item_Name']=="Natural River Sand"){echo "selected";} ?>>Natural River Sand</option>
                                <option value="Stainless Steel" <?php if($row['Item_Name']=="Stainless Steel"){echo "selected";} ?>>Stainless Steel</option>
                            </select> 
                            <br>
                            <br>
                            Project ID:
                            <input type="text" name="Project_ID" value="<?php  echo $row['Project_ID']; ?>">
                            <br> 
                            <br>   
                            Unit Price:
                           <input type="text" name="Unit_Price" value="<?php  echo $row['Unit_Price']; ?>">
                           <br>
                           <br>
                           Quantity:
                           <input type ="text" name ="Quantity" value="<?php  echo $row['Quantity']; ?>">
                           <br>
                           <br>
                       
                        <input type="hidden" name="Item_ID" value="<?php echo $row['Item_ID'];?>"> <!-- Specify Primary key -->
                        <button type="submit" name="update1" class="edit">Update</button>
    </fieldset> 


            </div>


             <?php
                }
              
              ?>    
    
</body>
</html>



    