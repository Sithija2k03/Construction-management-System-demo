<?php

require ('config.php');

if(isset($_POST["submit"]))
{
    $EarthMoving = $_POST["EarthMoving"];
    $E_Equipments = $_POST["E_Equipments"];
    $Material = $_POST["Material"];
    $M_Equipments = $_POST["M_Equipments"];
    $ConstructionVehicles = $_POST["ConstructionVehicles"];
    $C_Equipments = $_POST["C_Equipments"];
    $Concrete = $_POST["Concrete"];
    $Co_Equipments = $_POST["Co_Equipments"];

    $query = "INSERT INTO equipment VALUES('','$EarthMoving','$E_Equipments','$Material','$M_Equipments','$ConstructionVehicles','$C_Equipments','$Concrete','$Co_Equipments')";

    mysqli_query($conn, $query);
    echo
    "<script> alert('Data Inserted Successfully'); </script>";
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Equipment Resource</title>
            <link  rel="StyleSheet" href="../Resources/CSS/Styles.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        </head>
        <body>
                
                <label class="logo">Constru<span>X</span></label>
                <div class="container">
                <a href="../CMS/Userlogin/userProfile.php"><img class="user" src="./Images/userProfile.jpg" alt="profile"> </a>
                </div>
                <!-- <div class="container">
                    <img src="Images/user.png">
                </div> -->
            <br>
            <br>
            <nav class="nav">
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

            <form method="post">
                <fieldset style="background-color: lightgray;">
                    <legend style="background-color: gray; color: white; padding: 2px 10px;">Equipment</legend>

                    <label for="Type of Equipment" style="margin: 95px;"><u>Type of Equipment</u></label>
                    <br><br>
                    <b style="margin: 70px;">Earth Moving Equipment</b>    
                    <label for="EarthMoving">Equipment : </label>

                    <select class="" name="EarthMoving" required>
                        <option value="" selected hidden>Select Equipment</option>
                        <option value="Excavators">Excavators</option>
                        <option value="Bulldozers">Bulldozers</option>
                        <option value="Backhoes">Backhoes</option>
                        <option value="Loaders">Loaders</option>
                    </select>

                    <label for="E_Equipments">No of Equipments : </label>
                    <input type="number" id="E_Equipments" name="E_Equipments" min="0" max="20"><br><br>

                    <b style="margin: 53px;">Material Handling Equipment</b>    
                    <label for="Material">Equipment : </label>

                    <select class="" name="Material">
                        <option value="" selected hidden>Select Equipment</option>   
                        <option value="Cranes">Cranes</option>
                        <option value="Forklifts">Forklifts</option>
                        <option value="Conveyors">Conveyors</option>
                    </select>

                    <label for="M_Equipments">No of Equipments : </label>
                    <input type="number" id="M_Equipments" name="M_Equipments" min="0" max="20"><br><br>

                    <b style="margin: 80px;">Construction Vehicles</b>    
                    <label for="ConstructionVehicles">Equipment : </label>

                    <select class="" name="ConstructionVehicles">
                        <option value="" selected hidden>Select Equipment</option>
                        <option value="Dump Trucks">Dump Trucks</option>
                        <option value="Concrete Mixer Trucks">Concrete Mixer Trucks</option>
                        <option value="Flatbed Trucks">Flatbed Trucks</option>
                    </select>

                    <label for="C_Equipments">No of Equipments : </label>
                    <input type="number" id="C_Equipments" name="C_Equipments" min="0" max="20"><br><br>

                    <b style="margin: 81px;">Concrete Equipments</b>    
                    <label for="Concrete">Equipment : </label>

                    <select class="" name="Concrete">
                        <option value="" selected hidden>Select Equipment</option>
                        <option value="Concrete Mixer">Concrete Mixer</option>
                        <option value="Concrete Pumps">Concrete Pumps</option>
                    </select>

                    <label for="Co_Equipments">No of Equipments : </label>
                    <input type="number" id="Co_Equipments" name="Co_Equipments" min="0" max="20"><br><br>


                <br>
                <br>
                <input type="submit" name="submit" value="Submit" class="sbtn">
                </fieldset> 
            </form>
              
            <a href="readR.php" class="btn-view">View Details</a>
    
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