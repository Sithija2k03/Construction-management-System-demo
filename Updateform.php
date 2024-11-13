<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Company/Team</title>
            <link  rel="StyleSheet" href="Update.css">
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
                 if(isset($_GET['member_id']))
            {
                    $member_id=$_GET['member_id'];
                    $sql="SELECT*from add_member WHERE member_id=$member_id";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_array($result);
                   ?>
              <center>
                <form action="Update.php" method="post" class="update-form">
                    <fieldset class="wrap">
                        <legend><b>Add a New member<b></legend>
                      
                           <center> ID:<input type="text" name=" member_id"value=" <?php echo $row['member_id']?>"required><br></center>
                           <br>

                            <center>Name:<input type="text"name="member_name"value="<?php echo $row['member_name']?>"required><br></center>
                            <br>

                            <center>Gender:<label for="male">
                                        <input type="radio" id="male" name="gender" value="male" required>Male</label>
                                    <label for="female">
                                        <input type="radio" id="female" name="gender" value="female" required>Female</label><br></center>
                                        <br>
                            
                            <center>E-mail:<input type="email"name="email_address"value="<?php echo $row['email_address']?>"required><br></center>
                            <br>

                            <center>TP:<input type="tel" name="contact_number"value="<?php echo $row['contact_number']?>"required><br></center>
                            <br>

                            <label for="Role"> Role:</label>
                                                
                                <select id="Role" name="Role"value="<?php echo $row['Role']?>"required>
                                    <option value="project_manager">Project Manager</option>
                                    <option value="site_engineer">Site Engineer</option>
                                    <option value="quantity_surveyor">Quantity Surveyor</option>
                                    <option value="supplier">supplier</option>
                                    <option value="accountant">accountant</option>
                                </select><br><br><br>

                            Location:<input type="text"name="member_location" value="<?php echo $row['member_location']?>"required><br><br>
                 
                            <center> <input type="submit" value="Update" style="background-color: #4ac322;color:white;border:none;"></center>
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
                    <a href="#"><img src="images1/facebook.jpeg" alt="facebook"> </a>
                    <a href="#"><img src="images1/instragram.jpeg" alt="instagram"> </a> 
                    <a href="#"><img src="images1/twitter.jpeg" alt="twitter"> </a>
                    <a href="#"><img src="images1/WhatsApp .jpeg" alt="whatsapp"> </a>
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
            
    








            