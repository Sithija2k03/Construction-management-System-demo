<?php
include_once'config.php'
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Company/Team</title>
            <link  rel="StyleSheet" href="Readc.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


        </head>
        <body>
                
                <label class="logo">Constru<span>X</span></label>
                <div class="container">
                <a href="../Userlogin/userProfile.php"><img class="user" src="./Images/userProfile.jpg" alt="profile"> </a>
                </div>
                <!-- <div class="container">
                    <img src="Images/pattern2.png">
                </div> -->
            <br>
            <br>
            <nav class="navbar">
                
                <ul>
                    <li><a href="../project_crud.php">Dashboard</a></li>
                    <li><a class = "active" href="insertc.html">Company/Team</a></li>
                    <li><a href="../Resources/index.php">Resources</a></li>
                    <li><a href="../ProjectForm.html">Project</a></li>
                    <li><a href ="../Inventory.html">Utilization</a></li>
                </ul>
              </nav>
              <!-- Read the details   -->
            <center>
              <table style="background-color: lightgray;" width="100%" border="1">
              
                    <tr>
                        <th><b>ID</b></th>
                        <th><b>Name</b></th>
                        <th><b>Location</b></th>
                        <th><b>Email</b></th>
                        <th><b>TP</b></th>
                        <th><b>owner name</b></th>
                        <th><b>Edit</b></th>
                        <th><b>Delete</b></th>
                    </tr>
            
              <?php
              
                    
                    $sql = "SELECT * FROM add_company"; //sql query to select all row from a specific table//
                    
                        $result = $conn->query($sql);
                    
                        
                        if($result)
                        {
                            while($row = $result-> fetch_assoc())
                            {
                                ?>
                                        <tr>
                                        
                                            <td><?php echo $row["company_id"];?></td>
                                            <td><?php echo $row["company_name"];?></td>
                                            <td><?php echo $row["Company_location"];?></td>
                                            <td><?php echo $row["email_address"];?></td>
                                            <td><?php echo $row["phone_number"];?></td>
                                            <td><?php echo $row["owner_name"];?></td>
                                            
                                          <td> <a href="Updateformc.php?company_id=<?php echo  $row["company_id"];?>" class="Update" style="color:blue;">
                                            Update</a></td>
                                           
                                            <td><a  onclick="return confirm('Are you sure you want to delete !')" href="Deletec.php?company_id=<?php echo  $row["company_id"];?>"class="Delete" style="color:red;">
                                            Delete</a></td>
                                            
                                    
                                        </tr>
                                <?php     
                            }
                           
                        }
                        else
                        {
                               echo "No records found !";
                        }
                    
                        $conn -> close();
              
                ?>
                    </center>
                    </table>

                    <a href="insertM.html" class="add-mem">Add Members</a>
                    
              

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

