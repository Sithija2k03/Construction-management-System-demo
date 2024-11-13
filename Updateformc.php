<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Company/Team</title>
            <link  rel="StyleSheet" href="Updatec.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        </head>
        <body>
                
                <label class="logo">Constru<span>X</span></label>
                <div class="container">
                <a href="../CMS/Userlogin/userProfile.php"><img class="user" src="./Images/userProfile.jpg" alt="profile"> </a>
                </div>
                <!-- <div class="container">
                    <img src="Images/pattern2.png">
                </div> -->
            <br>
            <br>
            <nav class="navbar">
                
                <ul>
                    <li><a href="../project_crud.php">Dashboard</a></li>
                    <li><a class = "actve" href="../company/insertc.html">Company/Team</a></li>
                    <li><a href="../Resources/index.php">Resources</a></li>
                    <li><a href="../ProjectForm.html">Project</a></li>
                    <li><a href ="../Inventory.html">Utilization</a></li>
                </ul>
              </nav>
              <?php
              include_once
                 'config.php';
                 if(isset($_GET['company_id']))
            {
                    $company_id=$_GET['company_id'];
                    $sql="SELECT*from add_company WHERE company_id=$company_id";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_array($result);
                   ?>
              <center>
                <form action="Updatec.php" method="post">
                <fieldset class="wrap">
                    
                        <legend><b>Add a New company<b></legend>
                      
                        <center><b style="margin: 37px;">ID:</b><input type="text" name=" company_id"value="<?php echo $row['company_id']?>"required><br><br></center>

            
                        <center><b style="margin: 25px;"> Name:</b><input type="text"name="company_name"value="<?php echo $row['company_name']?>"required><br><br></center>

                        <center><b style="margin: 15px;">Location:</b><input type="text"name="Company_location"value="<?php echo $row['Company_location']?>"required><br><br></center>
                            
                        <center><b style="margin: 25px;">E-mail:</b><input type="email"name="email_address"value="<?php echo $row['email_address']?>"required><br><br></center>

                        <center><b style="margin: 36px;">TP:</b><input type="tel" name="phone_number"value="<?php echo $row['phone_number']?>"required><br><br></center>

                        <center><b style="margin: 2px;">owner name:</b><input type="tel" name="owner_name"value="<?php echo $row['owner_name']?>"required><br><br></center>


                            
                                
                        <center> <input type="submit" value="Update" style="background-color: #4ac322;color:white;border:none;"></center>
                    </fieldset>

                </form>
            </center>
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
                    <a href="#"><img src="images/facebook.jpeg" alt="facebook"> </a>
                    <a href="#"><img src="images/instragram.jpeg" alt="instagram"> </a> 
                    <a href="#"><img src="images/twitter.jpeg" alt="twitter"> </a>
                    <a href="#"><img src="images/WhatsApp .jpeg" alt="whatsapp"> </a>
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