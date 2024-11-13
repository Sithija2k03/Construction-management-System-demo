


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Update Labor</title>
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
                <li><a href="../project_crud.php">Dashboard</a></li>
                    <li><a href="../company/insertc.html">Company/Team</a></li>
                    <li class="dropdown">
                        <button class="dropbtn" onclick="myFunction()">Resources <i class="fa fa-caret-down"></i></button>
                        <ul class="dropdown-content" id="myDropdown">
                            <a href="index.php">Labor</a>
                            <a href="Equipment.html">Equipment</a>
                            <a href="Material.html">Material</a>
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

           <?php 
            include 'config.php';
            
            if (isset($_GET['Labor_ID'])) {
            $Labor_ID = $_GET['Labor_ID'];
            $sql= "SELECT * from labor WHERE Labor_ID=$Labor_ID";
            $result=mysqli_query($conn, $sql);
            $row= mysqli_fetch_array($result);
            ?>


            <form class="update_form" action="process.php" method="POST">
                <fieldset style="background-color: lightgray;">
                    <legend style="background-color: gray; color: white; padding: 2px 10px;">Labor</legend>

                    <label for="Work_Category">Labor Category : </label>

                    <select name="Work_Category" required>
                        <option value="" >Select Category</option>
                        <option value="Electricians"  <?php if($row['Work_Category']=="Electricians"){echo "selected";} ?>>Electricians</option>
                        <option value="Plumbers" <?php if($row['Work_Category']=="Plumbers"){echo "selected";} ?>>Plumbers</option>
                        <option value="Carpenters" <?php if($row['Work_Category']=="Carpenters"){echo "selected";} ?>>Carpenters</option>
                        <option value="Welders" <?php if($row['Work_Category']=="Welders"){echo "selected";} ?>>Welders</option>
                        <option value="HVAC Technicians" <?php if($row['Work_Category']=="HVAC Technicians"){echo "selected";} ?>>HVAC Technicians</option>
                    </select>

                    <label for="No_Of_Workers">No of Workers : </label>
                    <input type="number" name="No_Of_Workers" min="0" max="20" value="<?php echo $row['No_Of_Workers'];?>" required>
                <br>
                <br>
                <input type="hidden" name="Labor_ID" value="<?php echo $row['Labor_ID']; ?>"> <!--Primary Key!-->
                <button type="submit" name="updateL" class="ubtn">Update</button>
                </fieldset> 
            </form>
<?php            
}
?>
    
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