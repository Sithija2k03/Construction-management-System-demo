<?php
session_start();

// Check if session variables are set
if(isset($_SESSION['fname']) && isset($_SESSION['lname']) && isset($_SESSION['email'] ) &&isset($_SESSION['uid'] )) {
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];
    $uId = $_SESSION['uid'];
} else {
    // Redirect the user to the login page if session data is missing
    header("Location: index.php");
    exit(); // Ensure script execution stops after redirect
}

// Check if the logout button is clicked
if(isset($_GET['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect the user to the login page or any other appropriate page
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title> 
        <link rel="stylesheet" href="user1.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>

    <body>

        <div class="sign-container">
            <!-- <img src="Images/signup1.jpg" alt="Image" class="signimage"> -->
             
             <h1>
              Your  <span style="color: blue;">Profile</span>
             
             </h1>
         
             <div class="wrap"> 
             <!-- <div class="profile-section"> -->
                <div class="profile-details">
                    <div class="profile-photo">
                        <img src="./Images/userPNG.png" alt="Profile Photo">
                    </div>



                           <!-- Info Section -->
        <div class="info-section">
            <div class="user-info">
                <div class="info-item">
                    First Name: <?php echo "$fname"; ?>
                </div>
                <div class="info-item">
                    Last Name: <?php echo "$lname";?>
                </div>
                <div class="info-item">
                    Email: <?php echo "$email";?>
                </div>
                <div class="info-item">
                    Password: *********
                </div>
                </div>
                    <a href="./database_reg-usr/database-update.php" style="text-decoration: none;">
                    <button class="reset-pass"><i class="fas fa-key"></i>Reset Password</button>
                    </a>

                    <button class="save-button">Save</button>
                </div>
            </div>
        </div>


                <div class="button-container">
                    <div class="edit-profile">
                    <form id="updateForm" action="updateProfile.php" method="get">

                        <input type="hidden" id="updateValue" name="update" value="<?php echo $uId; ?>">
                        <button type="button" class="editBtn" onclick="submitForm()">Edit</button>

                    </form>

                    <script>
                        function submitForm() {
                            document.getElementById("updateValue").value = "<?php echo $uId; ?>";
                            document.getElementById("updateForm").submit();
                        }
                    </script>

                    </div>

                    <div class="settings">
                        <form action=accountDelete.php method="get">
                            <button  input type="submit" class="deleteBtn" onclick="login()"   name="delete">Delete account</button>
                            <script>
                            function login() {
                                var response=confirm("Are you sure you want to delete your account?");
                                return response;
                                }
                    </script>

                        </form>
                    </div>
                </div>
                <div id="logout">
                    <!-- Use a link with a logout parameter instead of a form -->
                    <a href="index.php?logout=true">Log Out</a>
                </div>


                    
                </div>
            </div>


 
                 <!-- <div class="button-container">
                    <button type="submit" class="editBtn">Edit profile</button>
                 <button type="submit" class="deleteBtn">Delete profile</button>
                 </div> -->
 
                 <!-- <button type="submit" class="btn2">Edit profile</button>
                 <button type="submit" class="deleteBtn">Delete profile</button> -->
             </div> 
         </div> 

        

    </body>
</html>    

