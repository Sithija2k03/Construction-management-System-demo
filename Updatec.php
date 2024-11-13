<?php

include_once
'config.php';
?>
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
                    <li><a class = "active" href="../company/insertc.html">Company/Team</a></li>
                    <li><a href="../Resources/index.php">Resources</a></li>
                    <li><a href="../ProjectForm.html">Project</a></li>
                    <li><a class ="../Inventory.html">Utilization</a></li>
                </ul>
              </nav>


              <!--end of the navigation bar-->

              <?php
                                
                $comID=$_POST["company_id"];
                $comname=$_POST["company_name"];
                $comloc=$_POST["Company_location"];
                $commail=$_POST["email_address"];
                $CTno=$_POST["phone_number"];
                $own=$_POST["owner_name"];
                
                

                $sql = "UPDATE add_company SET company_id='$comID',company_name='$comname',Company_location='$comloc',email_address='$commail',phone_number='$CTno',owner_name='$own' WHERE company_id='$comID' ";
                if ($conn->query($sql) === TRUE) 
                {
                echo "<h1><center>Record updated successfully</h1><center>";
                } 
                else {
                echo "Error updating record: " . $conn->error;
                }

                $conn->close();
                header('location:/CMS/company/Readc.php');
                ?>

           <footer>
                <div class="left-footer">
                    <label class="logo-footer">ConstruX</label><br><br>
                    <i class="fa fa-map-marker"></i> 
                    No 547 Athurugiriya Road,Malabe
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
