<?php   include('Connection.php');  ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="StyleSheet" href="style.css">
    <title>Utilization </title>
    <link rel="StyleSheet" href="/CSS/read.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <a href="userProfile.php"><img class="container" src="./Images/userProfile.jpg" alt="profile"> </a>

    <style>
        
        .Add1 {
            background-color:blue;
            text-decoration: none; /remove underline/
            border-radius:5px;
            padding:10px;
            color:white;
            position: relative; /* Change position to fixed */
            top: -10px; /* Adjust bottom distance from the bottom of the viewport */
            left: 1355px; 
        }
        .Add2 {
            background-color:blue;
            text-decoration: none; /remove underline/
            border-radius:5px;
            padding:10px;
            color:white;
            position: relative; /* Change position to fixed */
            top: -10px; /* Adjust bottom distance from the bottom of the viewport */
            left: 1355px; 
        }
        .Add3 {
            background-color:blue;
            text-decoration: none; /remove underline/
            border-radius:5px;
            padding:10px;
            color:white;
            position: relative; /* Change position to fixed */
            top: -10px; /* Adjust bottom distance from the bottom of the viewport */
            left: 1355px; 
        }
    
    </style>
</head>

<body>
    <label class="logo">Constru<span>X</span></label>
    <!-- <div class="container">
        <img src="Images/user.png">
    </div> -->
    <br>
    <br>
    <nav class="navbar">

        <ul>
            <li><a href="project_crud.php">Dashboard</a></li>
            <li><a href="../CMS/company/insertc.html">Company/Team</a></li>
            <li><a href="../CMS/Resources/index.php">Resources</a></li>
            <li><a href="ProjectForm.html">Project</a></li>
            <li class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Utilization <i class="fa fa-caret-down"></i></button>
                <ul class="dropdown-content" id="myDropdown">
                <a href ="Inventory.html">Add Inventory</a>
                <a href ="Utilization.html">Add Utilization</a>
                <a href="Payment.html">Add Payment</a>
                </ul>
            </li>
    </nav>

    

    <h2><u>Inventory Summary</u> </h2>

    <a href = "Inventory.html" class = "Add1">+Add Details</a>

    <table class="Inventory" > 
    <tr>
        <th>Item ID</th> 
        <th>Item Name</th>
        <th>Project ID</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th colspan=2>Actions</th>
    </tr>

    <?php
    

    $sql = 'SELECT * FROM inventory'; //sql query to select all row from a specific table//

    $result = $connection -> query($sql);

    if($result === false)
    {
        die('Error executing query :'.$connection -> error) ;
    }
    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
    ?>
            <tr>
            <td><?php echo $row['Item_ID']; ?> </td>
            <td><?php echo $row['Item_Name']; ?></td>
            <td><?php echo $row['Project_ID']; ?></td>
            <td><?php echo $row['Quantity']; ?></</td>
            <td><?php echo$row['Unit_Price']; ?></td>
            <td><a href="updateFormI.php?Item_ID=<?php echo $row['Item_ID']; ?>" class="edit" >Edit</a>
            <td><a href="deleteI.php?Item_ID=<?php echo $row['Item_ID']; ?>" class="delete" >Delete</a>
        </tr>

        <?php
        }
    }
    else
    {
    echo "No inventory found !";
    }
       
?>
</table>

<h2><u>Utilizations Summary</u></h2>

<a href = "Utilization.html" class = "Add2">+Add Details</a>

<table class="Utilization" >
    <tr>
       
        <th>Utilization No</th>
        <th>Client Name</th>
        <th>Client Address</th>
        <th>Client Contact No</th>
        <th>Project ID</th>
        <th>Utilization Date</th>
        <th>Quantity</th>
        <th>Used Material</th>
        <th>Unit Price</th>
        <th colspan=2>Actions</th>
        
    </tr>


 <?php  


$sql = 'SELECT * FROM utilization'; //sql query to select all row from a specific table//

$result = $connection -> query($sql);

if($result === false)
{
    die('Error executing query :'.$connection -> error) ;
}
if($result -> num_rows > 0)
{
    while($row = $result -> fetch_assoc())
    {
?>
        <tr>
        
        <td><?php echo $row['Utilization_No']; ?></td>
        <td><?php echo $row['Client_Name']; ?></td>
        <td><?php echo $row['Client_Address']; ?></</td>
        <td><?php  echo$row['Client_C_No']; ?></td>
        <td><?php echo $row['Project_ID']; ?> </td>
        <td><?php  echo$row['Utilization_Date']; ?></td>
        <td><?php  echo$row['Quantity']; ?></td>
        <td><?php  echo$row['Used_Material']; ?></td>
        <td><?php  echo$row['Unit_Price']; ?></td>
        <td><a href="updateFormU.php?Utilization_No=<?php echo $row['Utilization_No']; ?>" class="edit" >Edit</a>
        <td><a href="deleteI.php?Utilization_No=<?php echo $row['Utilization_No']; ?>" class="delete" >Delete</a>
        
    </tr>

    <?php
    }
}
else
{
echo "No utilizations found !";
}

?>
</table>

<h2><u>Payment Summary</u></h2>

<a href = "Payment.html" class = "Add3">+Add Details</a>

<table class="Payment" >
    <tr>
        <th>Project ID</th>
        <th>Payment ID</th>
        <th>Payment Date</th>
        <th>Total Amount</th>
        <th>Paid Amount</th>
        <th>Due Amount</th>
        <th>Payment Type</th>
        <th>Payment Description</th>
        <th colspan=2>Actions</th>
    </tr>

    <?php

    

    $sql = 'SELECT * FROM payment'; //sql query to select all row from a specific table//

    $result = $connection -> query($sql);

    if($result === false)
    {
        die('Error executing query :'.$connection -> error) ;
    }
    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
            ?>
            <tr>
            <td><?php echo $row['Project_ID']; ?> </td>
            <td><?php echo $row['Pay_ID']; ?></td>
            <td><?php echo $row['Pay_Date']; ?></td>
            <td><?php echo $row['Total_Amount']; ?></</td>
            <td><?php echo$row['Paid_Amount']; ?></td>
            <td><?php echo $row['Due_Amount']; ?></td>
            <td><?php echo $row['Pay_Type']; ?></td>
            <td><?php echo $row['Pay_Description']; ?></td>
            <td><a href="updateFormP.php?Pay_ID=<?php echo $row['Pay_ID']; ?>" class="edit" >Edit</a>
            <td><a href="deleteI.php?Pay_ID=<?php echo $row['Pay_ID']; ?>" class="delete" >Delete</a>
        </tr>

        <?php
        }
    }
    else
    {
    echo "No records found !";
    }    
?>
</table>

 <footer>
            <div class="left-footer">
                <label class="logo-footer">ConstruX</label><br><br>
                <i class="fa fa-map-marker"></i>
                No 547 Athurugiriya Road,<br>Malabe
                <br><br>
                <i class="fa fa-phone"></i>
                011-1258933
                <br><br>
                <i class="fa fa-envelope"></i>
                support@gmail.com
                <p id="copyright">Copyright &copy;2024 ConstruX. All rights reserved.</p>
            </div>
            <div class="right-footer">
                <h4>SOCIAL MEDIA:</h4>
                <a href="#"><img src="Images/Facebook.jpg" alt="facebook"> </a>
                <a href="#"><img src="Images/Instergram.jpg" alt="instagram"> </a>
                <a href="#"><img src="Images/twitter.jpg" alt="twitter"> </a>
                <a href="#"><img src="Images/whatsapp.jpg" alt="whatsapp"> </a>
            </div>

            <div class="center-footer">
                <p class="footer-links">
                    <a href="Homepage.html">Home</a>
                    <a href="url">Solutions</a>
                    <a href="url">Features</a>
                    <a href="AboutUs.html">About Us</a>
                    <a href="ContactUs.html">Contact Us</a>
                </p>
                <div class="privacy-terms">
                    <ul>
                        <li><a href="#">Terms and Conditions</a></li>
                        <br>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
            </div>

            <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }
    </script>
</body>

</html>