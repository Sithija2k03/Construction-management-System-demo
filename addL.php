<?php
include_once 'config.php';
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Labor Resource</title>
            <link  rel="StyleSheet" href="../CRUD/CSS/Styles.css">
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
                        <button class="dropbtn" onclick="myFunction()">Resources <i class="fa fa-caret-down"></i></button>
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
                    if (!abc.target.matches('.dropbtn')) 
                    {
                        var myDropdown = document.getElementById("myDropdown");
                        if (myDropdown.classList.contains('show'))
                        {
                            myDropdown.classList.remove('show');
                        }
                    }
                }
            </script>

            <form method="post">
                <fieldset style="background-color: lightgray;">
                    <legend style="background-color: gray; color: white; padding: 2px 10px;">Labor</legend>

                    <label for="CategoryName">Labor Category : </label>

                    <select class="form-control">
                        <option>Select Category</option>

                        <?php
                        $sql="select * from category";
                        $result=mysquli_query($conn,$sql);

                        while($data=mysqli_fetch_array($result))
                        {?>
                        <option value="<?php echo $data['Category_ID'];?>"><?php echo $data['CategoryName'];?></option>
                        <?php } ?>
                    </select>
                    <label for="Workers">No of Workers : </label>
                    <input type="number" id="workers" name="workers" min="0" max="20" value="<?php echo $data['Labor_ID'];?>"><?php echo $data['Workers'];?>
                <br>
                <br>
                <button type="submit" name="submit" class="btnbtn-primary">Submit</button>
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
                    <a href="#"><img src="../Images/Facebook.jpg" alt="facebook"> </a>
                    <a href="#"><img src="../Images/WhatsApp Image .jpg" alt="instagram"> </a> 
                    <a href="#"><img src="../Images/Twitter.jpg" alt="twitter"> </a>
                    <a href="#"><img src="../Images/WhatsApp Image 2024-04-30.jpg" alt="whatsapp"> </a>
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