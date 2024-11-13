
<?php include('DBconnect.php'); ?>


<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Project</title>
            <link  rel="StyleSheet" href="/CSS/dashboard.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        </head>
        <body>
                
                <label class="logo">Constru<span id="X">X</span></label>
                
                <div class="container">
                <a href="../CMS/Userlogin/userProfile.php"><img class="user" src="./Images/userProfile.jpg" alt="profile"> </a>
                </div>
                <!-- <div class="container">
                    <img src="Images/user.png">
                </div> -->
            <br>
            <br>
            <nav class="navbar">
                
                <ul>
                    <li><a class ="active" href="project_crud.php">Dashboard</a></li>
                    <li><a href="../CMS/company/insertc.html">Company/Team</a></li>
                    <li><a href="../CMS/Resources/index.php">Resources</a></li>
                    <li><a href="ProjectForm.html">Project</a></li>
                    <li><a href="Inventory.html">Utilization</a></li>
                </ul>
              </nav>
              <br>
              <button class="add_p" onclick="window.location.href='ProjectForm.html'"><span>+</span>  ADD PROJECT</button>
              <br>
              <br>

<table class="table" >
    <tr>
        <th>Client Name</th>
        <th>Project ID</th>
        <th>Project Name</th>
        <th>Project Manager</th>
        <th>Address</th>
        <th style="width:100px">Start Date</th>
        <th style="width:100px">End Date</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php


    $sql = "SELECT * FROM projects" ; //sql query to select all row from a specific table//

    $result = $connection -> query($sql);

    if($result === false)
    {
        die('Error executing query :'.$connection -> error) ;
    }
    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
            ?>
            <tr>
            <td><?php echo $row['client_name']; ?> </td>
            <td><?php echo $row['project_id']; ?></td>
            <td><?php echo $row['project_name']; ?></td>
            <td><?php echo $row['project_manager']; ?></</td>
            <td><?php echo$row['Address']; ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><?php echo $row['end_date']; ?></td>
            
            <td><a href="update_user.php?project_id=<?php echo $row['project_id']; ?>" class="edit" >Edit</a>
            <td><a onclick="return confirm('Are you sure you want to delete !')" href="delete_user.php?project_id=<?php echo $row['project_id']; ?>" class="delete" >Delete</a></td>   
            </td> 
            </tr>

        <?php
        }
    }
    else
    {
    echo "No records found !";
    }

    $connection -> close();

    ?>
</table>


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
                    <a href="www.facebook.com"><img src="Images/facebook.png" alt="facebook"> </a>
                    <a href="www.instagram.com"><img src="Images/instagram.png" alt="instagram"> </a> 
                    <a href="www.twitter.com"><img src="Images/twitter.png" alt="twitter"> </a>
                    <a href="www.whatsapp.com"><img src="Images/whatsapp.png" alt="whatsapp"> </a>
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