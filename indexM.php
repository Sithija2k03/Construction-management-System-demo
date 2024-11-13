<?php
require ('config.php');

if(isset($_POST["submit"]))
{
    $Aggregate = $_POST["Aggregate"];
    $A_Quantity = $_POST["A_Quantity"];
    $ConcreteCement = $_POST["ConcreteCement"];
    $C_Quantity = $_POST["C_Quantity"];
    $LumberWood = $_POST["LumberWood"];
    $L_Quantity = $_POST["L_Quantity"];
    $Metal = $_POST["Metal"];
    $M_Quantity = $_POST["M_Quantity"];
    $PlumbingElectrical = $_POST["PlumbingElectrical"];
    $P_Quantity = $_POST["P_Quantity"];

    $query = "INSERT INTO material VALUES('','$Aggregate','$A_Quantity','$ConcreteCement','$C_Quantity','$LumberWood','$L_Quantity','$Metal','$M_Quantity','$PlumbingElectrical','$P_Quantity')";

    mysqli_query($conn, $query);
    echo
    "<script> alert('Data Inserted Successfully'); </script>";
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Material Resource</title>
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

            <form method="post">
                <fieldset style="background-color: lightgray;">
                    <legend style="background-color: gray; color: white; padding: 2px 10px;">Material</legend>

                    <label for="Type_of_Material" style="margin: 95px;"><u>Type of Material</u></label>
                    <br><br>
                    <b style="margin: 110px;">Aggregtes</b>    
                    <label for="Aggregate">Material Name : </label>

                    <select class="" name="Aggregate">
                        <option value="" selected hidden>Select Material Name</option>
                        <option value="Sand">Sand</option>
                        <option value="Gravel">Gravel</option>
                        <option value="Crashed Stones">Crashed Stones</option>
                    </select>

                    <label for="A_Quantity">Quantity : </label>
                    <input type="number" id="A_Quantity" name="A_Quantity" min="0" max="20">[cube]<br><br>

                    <b style="margin: 30px;">Concrete and Cement Products</b>    
                    <label for="ConcreteCement">Material Name : </label>

                    <select class="" name="ConcreteCement">
                        <option value="" selected hidden>Select Material Name</option>
                        <option value="Cement">Cement</option>
                        <option value="Ready-Mix Concrete">Ready-Mix Concrete</option>
                        <option value="Concrete Blocks and Bricks">Concrete Blocks and Bricks</option>
                    </select>

                    <label for="C_Quantity">Quantity : </label>
                    <input type="number" id="C_Quantity" name="C_Quantity" min="0" max="20">[kg]<br><br>

                    <b style="margin: 43.5px;">Lumber and Wood Products</b>    
                    <label for="LumberWood">Material Name : </label>

                    <select class="" name="LumberWood">
                        <option value="" selected hidden>Select Material Name</option>
                        <option value="Dimensional Lumber">Dimensional Lumber</option>
                        <option value="Plywood">Plywood</option>
                        <option value="Engineered Wood Products">Engineered Wood Products</option>
                    </select>

                    <label for="L_Quantity">Quantity : </label>
                    <input type="number" id="L_Quantity" name="L_Quantity" min="0" max="20"><br><br>

                    <b style="margin: 126.5px;">Metal</b>    
                    <label for="Metal">Material Name : </label>

                    <select class="" name="Metal">
                        <option value="" selected hidden>Select Material Name</option>
                        <option value="Structured Steel">Structured Steel</option>
                        <option value="Reiforcing Bars">Reiforcing Bars</option>
                    </select>

                    <label for="M_Quantity">Quantity : </label>
                    <input type="number" id="M_Quantity" name="M_Quantity" min="0" max="20"><br><br>

                    <b style="margin: 22px;">Plumbing and Electrical Materials</b>    
                    <label for="PlumbingElectrical">Material Name : </label>

                    <select class="" name="PlumbingElectrical">
                        <option value="" selected hidden>Select Material Name</option>
                        <option value="Pipes and Fittings">Pipes and Fittings</option>
                        <option value="Electrical Wiring and Components">Electrical Wiring and Components</option>
                    </select>

                    <label for="P_Quantity">Quantity : </label>
                    <input type="number" id="P_Quantity" name="P_Quantity" min="0" max="20"><br><br>

                
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