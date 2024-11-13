<?php
session_start();

$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];


?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>My Profile</title>
            <link  rel="StyleSheet" href="userInterface.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
            <a href="userProfile.php"><img class="container" src="./Images/userProfile.jpg" alt="profile"> </a>

            <style>
                .displayName{
                    font-size:50px;
                }
                .welcome{
                    width:100%;
                    height:100%;
                }
            </style>
            

        </head>
        <body>
     

                <label class="logo">Constru<span>X</span></label>
                
            <br>
            <br>
            <nav class="navbar">
                
                <ul>
                    <li><a href="../project_crud.php">Dashboard</a></li>
                    <li><a href="../company/insertc.html">Company/Team</a></li>
                    <li><a href="../Resources/index.php">Resources</a></li>
                    <li><a href="../ProjectForm.html">Project</a></li>
                    <li><a href="../Inventory.html">Utilization</a></li>
                </ul>
              </nav>

              <div class="displayName">
                   Helloo <?php echo "$fname"; ?>....
                   <img src="Images/Welcome.jpg" alt="welcome image" class="welcome">
                </div>  
              
            
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
                    <a href="#"><img src="Images/facebook.jpg" alt="facebook"> </a>
                    <a href="#"><img src="Images/instagram.jpg" alt="instagram"> </a> 
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
                
            


            </footer>
</body>
</html>


<!-- <head>
            <meta charset="UTF-8">
            <title>Utilization</title>
            <link  rel="StyleSheet" href="userInterface.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
            <a href="userProfile.html"><img class="container" src="Images/userProfile.png" alt="profile"> </a>
            

        </head> -->