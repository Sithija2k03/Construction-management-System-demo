<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Edit Project </title>
            <link  rel="StyleSheet" href="/CSS/UpdateForm.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        </head>
        <body>

        <h1>UPDATE PROJECT</h1>

                
              <?php 
                 include 'DBconnect.php';

                if(isset($_GET['project_id'])) {
                    $project_id=$_GET['project_id'];
                    $sql="SELECT * from projects WHERE project_id=$project_id";
                    $result= mysqli_query($connection, $sql);
                    $row=mysqli_fetch_array($result);

                    ?>

            <div class="container">
            <fieldset class="field">
                    
            <form class="update-from" action="process.php" method="POST" >
                                      
                <h2>Client Name:</h2>
                <input type="text" name="client_name" value="<?php echo $row['client_name']?>" required>
                <br>
                <h2>Project Name:</h2>
                <input type="text" name="project_name" value="<?php echo $row['project_name']?>" required>
                <br>
                <h2>Project Manager:</h2>
                <input type="text" name="project_manager" value="<?php echo $row['project_manager']?>" required>
                <br>
                <h2>Address(Location):</h2>
                <input type="text" name="Address" value="<?php echo $row['Address']?>" required>
                <br>
                <h2>Start Date:</h2>
                <input type="date" name="start_date" value="<?php echo $row['start_date']?>" required>
                <br>
                <h2>End Date:</h2>
                <input type="date" name="end_date" value="<?php echo $row['end_date']?>" required>
                <br><br>
                <div>
                <input type="hidden" name="project_id" value="<?php echo $row['project_id'];?>">   <!--To specify the primary key column from the data base to update-->
                <button class="edit" type="submit" name="edit" >Update</button>
                </div>
                              
            </form>
            </fieldset>


            </div>


             <?php
                }
              
              ?>    
    
            </body>
</html>

