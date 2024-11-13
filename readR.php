<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Resources</title>
            <link  rel="StyleSheet" href="../Resources/CSS/Styles.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

            <style>
                th,td
                {
                    text-align: left;
                    padding: 8px;
                }
                tr
                {
                    background-color: lightgray;
                }
                .delete
                {
                    background-color: orangered;
                    color: white;
                    text-decoration: none;
                    padding: 5px 5px;
                    border-radius: 5px;
                }
                .update
                {
                    background-color: blue;
                    color: white;
                    text-decoration: none;
                    padding: 5px 5px;
                    border: none;
                    border-radius: 5px;
                }
                .add1
                {
                    background-color: green;
                    color: white;
                    text-decoration: none;
                    padding: 5px 5px;
                    border: none;
                    border-radius: 5px;
                    position: relative;
                    margin-top: 5px;
                    position: relative;
                    left:40px;
                    top:25px;
                }
                .add2{
                    background-color: green;
                    color: white;
                    text-decoration: none;
                    padding: 5px 5px;
                    border: none;
                    border-radius: 5px;
                    position: relative;
                    margin-top: 5px;
                    position: relative;
                    right:-250px;
                    top:25px;
                }
                .add3{
                    background-color: green;
                    color: white;
                    text-decoration: none;
                    padding: 5px 5px;
                    border: none;
                    border-radius: 5px;
                    position: relative;
                    margin-top: 5px;
                    position: relative;
                    right:-240px;
                    top:25px;
                }

            </style>
                

        </head>
        <body>
                
                <label class="logo">Constru<span>X</span></label>
                <div class="container">
                    <img src="Images/user.png">
                </div>
            <br>
            <br>
            <nav class="nav">
                <ul>
                    <li><a href="../project_crud.php">Dashboard</a></li>
                    <li><a href="../company/insertc.html">Company/Team</a></li>
                    <li class="dropdown">
                        <button class="dropbtn" onclick="myFunction()">Resources <i class="fa fa-caret-down"></i></button>
                        <ul class="dropdown-content" id="myDropdown">
                            <a href="index.php">Labor</a>
                            <a href="indexE.php">Equipment</a>
                            <a href="indexM.php">Material</a>
                        </ul>
                    </li>
                    <li><a href="../ProjectForm.html">Project</a></li>
                    <li><a href="../Inventory.html">Utilization</a></li>
                </ul>
            </nav>
            <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(abc) {
                    if (!abc.target.matches('.dropbtn')) {
                        var myDropdown = document.getElementById("myDropdown");
                        if (myDropdown.classList.contains('show')) {
                            myDropdown.classList.remove('show');
                        }
                    }
                }
            </script>

<b><u><i> Labor Resources </i></u></b><br><br>

<table>
    <tr>
        <th>Labor ID</th>
        <th>Work Category</th>
        <th>No of Workers</th>
        <th colspan="2">Options</th>
    </tr>

    <?php

     require 'config.php';

     $sql = "SELECT * FROM labor"; //To select all rows

     $result = $conn->query($sql);

     if($result===false) //predefined variable for count number of rows
     {
    die('Error executing query:'.$conn->error);
     }

    if($result->num_rows>0)
    {
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $row['Labor_ID'];?></td>
            <td><?php echo $row['Work_Category'];?></td>
            <td><?php echo $row['No_Of_Workers'];?></td>

            <td><a href="updateL.php?Labor_ID=<?php echo $row['Labor_ID']; ?>" class="update"> Update </a>
            <td><a href="deleteR.php?Labor_ID=<?php echo $row['Labor_ID']; ?>" class="delete"> Delete </a>
        </tr>

        <?php
    }
    }
    else
    {
    echo "No records found !";
    }

     $conn->close();

     ?>

</table>


<a href="index.php" class="add1" style="margin-left: 380px;"> Add Labor </a><br><br>


<br><br><b><u><i> Equipment Resources </i></u></b><br><br>

<table>
    <tr>
        <th>Equipment ID</th>
        <th>Earth Moving Equipments</th>
        <th>No of Equipments</th>
        <th>Material Equipments</th>
        <th>No of Equipments</th>
        <th>Construction Vehicles</th>
        <th>No of Equipments</th>
        <th>Concrete Equipments</th>
        <th>No of Equipments</th>
        <th colspan="2">Options</th>
    </tr>

    <?php

require 'config.php';

$sql = "SELECT * FROM equipment"; //To select all rows

$result = $conn->query($sql);

if($result===false) //predefined variale for count number of rows
{
    die('Error executing query:'.$conn->error);
}

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $row['Equipment_ID'];?></td>
            <td><?php echo $row['EarthMoving'];?></td>
            <td><?php echo $row['E_Equipments'];?></td>
            <td><?php echo $row['Material'];?></td>
            <td><?php echo $row['M_Equipments'];?></td>
            <td><?php echo $row['ConstructionVehicles'];?></td>
            <td><?php echo $row['C_Equipments'];?></td>
            <td><?php echo $row['Concrete'];?></td>
            <td><?php echo $row['Co_Equipments'];?></td>

            <td><a href="updateE.php?Equipment_ID=<?php echo $row['Equipment_ID']; ?>" class="update"> Update </a></td>
            <td><a href="deleteR.php?Equipment_ID=<?php echo $row['Equipment_ID']; ?>" class="delete"> Delete </a></td>
        </tr>

        <?php
    }
}
else
{
    echo "No records found !";
}

$conn->close();

?>
</table>

<a href="indexE.php" class="add2" style="margin-left: 1125px;"> Add Equipment </a><br><br>


<br><br><b><u><i> Material Resource </i></u></b><br><br>

<table>
    <tr>
        <th>Material ID</th>
        <th>Aggregate</th>
        <th>Quantity</th>
        <th>Concrete and Cement</th>
        <th>Quantity</th>
        <th>Lumber and Wood</th>
        <th>Quantity</th>
        <th>Metal</th>
        <th>Quantity</th>
        <th>Plumbing and Electrical</th>
        <th>Quantity</th>
        <th colspan="2">Options</th>
    </tr>

    <?php

require 'config.php';

$sql = "SELECT * FROM material"; //To select all rows

$result = $conn->query($sql);

if($result===false) //predefined variale for count number of rows
{
    die('Error executing query:'.$conn->error);
}

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $row['Material_ID'];?></td>
            <td><?php echo $row['Aggregate'];?></td>
            <td><?php echo $row['A_Quantity'];?></td>
            <td><?php echo $row['ConcreteCement'];?></td>
            <td><?php echo $row['C_Quantity'];?></td>
            <td><?php echo $row['LumberWood'];?></td>
            <td><?php echo $row['L_Quantity'];?></td>
            <td><?php echo $row['Metal'];?></td>
            <td><?php echo $row['M_Quantity'];?></td>
            <td><?php echo $row['PlumbingElectrical'];?></td>
            <td><?php echo $row['P_Quantity'];?></td>

            <td><a href="updateM.php?Material_ID=<?php echo $row['Material_ID']; ?>" class="update">Update</a></td>
            <td><a href="deleteR.php?Material_ID=<?php echo $row['Material_ID']; ?>" class="delete">Delete</a></td>
        </tr>


        <?php
    }
}
else
{
    echo "No records found !";
}

$conn->close();

?>
</table>

<a href="indexM.php" class="add3" style="margin-left:1125px;"> Add Material </a><br><br>
          
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
                    <a href="#"><img src="../Resources/Images/Facebook.jpg" alt="facebook"> </a>
                    <a href="#"><img src="../Resources/Images/WhatsApp Image .jpg" alt="instagram"> </a> 
                    <a href="#"><img src="../Resources/Images/Twitter.jpg" alt="twitter"> </a>
                    <a href="#"><img src="../Resources/Images/WhatsApp Image 2024-04-30.jpg" alt="whatsapp"> </a>
                </div>
                
                <div class="center-footer">
                    <p class="footer-links">
                        <a href="Homepage.html">Home</a>|
                        <a href="url">Solutions</a>|
                        <a href="url">Features</a>|
                        <a href="AboutUs.html">About Us</a>|
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
            </footer>
        </body>
    </html>
