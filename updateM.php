

<?php
if (isset($_POST['update_material']))
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

    $query = "UPDATE material SET 'Aggregate'= '$Aggregate','A_Quantity' = '$A_Quantity', 'ConcreteCement' = '$ConcreteCement','C_Quantity' = '$C_Quantity','LumberWood' = '$LumberWood','L_Quantity' = '$L_Quantity','Metal' = '$Metal','M_Quantity' = '$M_Quantity','PlumbingElectrical' = '$PlumbingElectrical','P_Quantity' = '$P_Quantity')";

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
                    <img src="Images/user.png">
                </div>
            <br>
            <br>
            <nav class="nav">
                <ul>
                    <li><a href="url">Dashboard</a></li>
                    <li><a href="url">Company/Team</a></li>
                    <li class="dropdown">
                        <button class="dropbtn" onclick="myFunction()"> Resources <i class="fa fa-caret-down"></i></button>
                        <ul class="dropdown-content" id="myDropdown">
                            <a href="Labor.html">Labor</a>
                            <a href="Equipment.html">Equipment</a>
                            <a href="Material.html">Material</a>
                        </ul>
                    </li>
                    <li><a href="url">Project</a></li>
                    <li><a href="url">Utilization</a></li>
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
            <?php 
            include 'config.php';
            
            if (isset($_GET['Material_ID']))
            $Material_ID = $_GET['Material_ID'];
            $sql= "SELECT * from material WHERE Material_ID=$Material_ID";
            $result=mysqli_query($conn, $sql);
            $row= mysqli_fetch_array($result);
            ?>

            <form class="update_form" action="process.php" method="post">
                <fieldset style="background-color: lightgray;">
                    <legend style="background-color: gray; color: white; padding: 2px 10px;">Material</legend>

                    <label for="Type_of_Material" style="margin: 95px;"><u>Type of Material</u></label>
                    <br><br>
                    <b style="margin: 110px;">Aggregtes</b>    
                    <label for="Aggregate">Material Name : </label>

                    <select class="" name="Aggregate">
                        <option value="">Select Material Name</option>
                        <option value="Sand"  <?php if($row['Aggregate']=="Sand"){echo "selected";} ?>>Sand</option>
                        <option value="Gravel"  <?php if($row['Aggregate']=="Gravel"){echo "selected";} ?>>Gravel</option>
                        <option value="Crashed Stones"  <?php if($row['Aggregate']=="Crashed Stones"){echo "selected";} ?>>Crashed Stones</option>
                    </select>

                    <label for="A_Quantity">Quantity : </label>
                    <input type="number" name="A_Quantity" min="0" max="20"  value="<?php echo $row['A_Quantity'];?>">[cube]<br><br>

                    <b style="margin: 30px;">Concrete and Cement Products</b>    
                    <label for="ConcreteCement">Material Name : </label>

                    <select class="" name="ConcreteCement">
                        <option value="" >Select Material Name</option>
                        <option value="Cement"  <?php if($row['ConcreteCement']=="Cement"){echo "selected";} ?>>Cement</option>
                        <option value="Ready-Mix Concrete"  <?php if($row['ConcreteCement']=="Ready-Mix Concrete"){echo "selected";} ?>>Ready-Mix Concrete</option>
                        <option value="Concrete Blocks and Bricks"  <?php if($row['ConcreteCement']=="Concrete Blocks and Bricks"){echo "selected";} ?>>Concrete Blocks and Bricks</option>
                    </select>

                    <label for="C_Quantity">Quantity : </label>
                    <input type="number" id="C_Quantity" name="C_Quantity" min="0" max="20" value="<?php echo $row['C_Quantity'];?>">[kg]<br><br>

                    <b style="margin: 43.5px;">Lumber and Wood Products</b>    
                    <label for="LumberWood">Material Name : </label>

                    <select class="" name="LumberWood">
                        <option value="" >Select Material Name</option>
                        <option value="Dimensional Lumber" <?php if($row['LumberWood']=="Dimensional Lumber"){echo "selected";} ?>>Dimensional Lumber</option>
                        <option value="Plywood" <?php if($row['LumberWood']=="Plywood"){echo "selected";} ?>>Plywood</option>
                        <option value="Engineered Wood Products" <?php if($row['LumberWood']=="Engineered Wood Products"){echo "selected";} ?>>Engineered Wood Products</option>
                    </select>

                    <label for="L_Quantity">Quantity : </label>
                    <input type="number" id="L_Quantity" name="L_Quantity" min="0" max="20" value="<?php echo $row['L_Quantity'];?>"><br><br>

                    <b style="margin: 126.5px;">Metal</b>    
                    <label for="Metal">Material Name : </label>

                    <select class="" name="Metal">
                        <option value="" >Select Material Name</option>
                        <option value="Structured Steel" <?php if($row['Metal']=="Structured Steel"){echo "selected";} ?>>Structured Steel</option>
                        <option value="Reiforcing Bars" <?php if($row['Metal']=="Reiforcing Bars"){echo "selected";} ?>>Reiforcing Bars</option>
                    </select>

                    <label for="M_Quantity">Quantity : </label>
                    <input type="number" id="M_Quantity" name="M_Quantity" min="0" max="20" value="<?php echo $row['M_Quantity'];?>"><br><br>

                    <b style="margin: 22px;">Plumbing and Electrical Materials</b>    
                    <label for="PlumbingElectrical">Material Name : </label>

                    <select class="" name="PlumbingElectrical">
                        <option value="" >Select Material Name</option>
                        <option value="Pipes and Fittings" <?php if($row['PlumbingElectrical']=="Pipes and Fittings"){echo "selected";} ?>>Pipes and Fittings</option>
                        <option value="Electrical Wiring and Components" <?php if($row['PlumbingElectrical']=="Electrical Wiring and Components"){echo "selected";} ?>>Electrical Wiring and Components</option>
                    </select>

                    <label for="P_Quantity">Quantity : </label>
                    <input type="number" id="P_Quantity" name="P_Quantity" min="0" max="20" value="<?php echo $row['P_Quantity'];?>"><br><br>

                
                <br>
                <br>
                <input type="hidden" name="Material_ID" value="<?php echo $row['Material_ID']; ?>"> <!--Primary Key!-->
                <button type="submit" name="updateM" class="ubtn">Update</button>
                </fieldset> 
            </form>
              
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