<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="update.css">
</head>
<body>
    <div class="container">
        <fieldset class="field">
        <form class="updateForm" action="updateForm.php" method="POST">
                <?php
                if(isset($_GET['update'])) {
                    // Retrieve the ID from the URL
                    $id = $_GET['update'];

                    // Establish a database connection
                    $conn = new mysqli('localhost', 'root', '', 'cms_project management');

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch the record corresponding to the provided ID
                    $sql = "SELECT * FROM r_user WHERE User_ID = $id";
                    $result = $conn->query($sql);
                    // Check if the record exists
                    if ($result->num_rows > 0) {
                        // Fetch the record
                        $row = $result->fetch_assoc();
                        // Display the input fields with values from the database
                        ?>
                        <h2>First Name:</h2>
                        <input type="hidden" name="id" value="<?php echo isset($row['User_ID']) ? $row['User_ID'] : ''; ?>">

                        <input type="text" name="fname" value="<?php echo isset($row['First_name']) ? $row['First_name'] : ''; ?>">
                        <br>
                        <h2>Last Name:</h2>
                        <input type="text" name="lname" value="<?php echo isset($row['Last_name']) ? $row['Last_name'] : ''; ?>">
                        <br>
                        <h2>Contact Number:</h2>
                        <input type="text" name="phone" value="<?php echo isset($row['Contact_No']) ? $row['Contact_No'] : ''; ?>">
                        <br>
                        <h2>Email:</h2>
                        <input type="text" name="email" value="<?php echo isset($row['Email']) ? $row['Email'] : ''; ?>">
                        <br>
                    <?php
                    } else {
                        echo "Record not found";
                    }
                    // Close the Database Connection
                    $conn->close();
                } else {
                    echo "ID not provided in the URL";
                }
                ?>
                <div>
    <!-- Your input fields here -->
    <button class="edit" type="submit" name="edit">Update</button>

                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>
