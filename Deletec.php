<?php

include_once
'config.php';
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Company/Team</title>
            <link  rel="StyleSheet" href="Deletec.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        </head>
        <body>
                
                <label class="logo">Constru<span>X</span></label>
                <div class="container">
                    <img src="Images/pattern2.png">
                </div>
            <br>
            <br>
            <nav class="navbar">
                
                <ul>
                    <li><a href="url">Dashboard</a></li>
                    <li><a class = "active" href="url">Company/Team</a></li>
                    <li><a href="url">Resources</a></li>
                    <li><a href="url">Project</a></li>
                    <li><a class ="url">Utilization</a></li>
                </ul>
              </nav>
              <?php
              if(isset($_GET['company_id'])){
                $comID=$_GET["company_id"];
                

                $sql = ("DELETE FROM add_company WHERE company_id=$comID");
              }
                                
                
             if ($conn->query($sql) === TRUE) 
               {
                 echo "<h2><center>Record deleted successfully<h2><center>";
               } 
             else
              {
               echo "Error deleting record: " . $conn->error;
              }
              header('location:/CMS/company/Readc.php');
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
                      <a href="url">Home</a>|
                      <a href="url">Solutions</a>|
                      <a href="url">Features</a>|
                      <a href="url">About Us</a>|
                      <a href="url">Contact Us</a> 
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
