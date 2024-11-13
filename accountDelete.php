<?php
    session_start();
    include('DBconnect.php');

    echo "<pre>";
print_r($_SESSION);
echo "</pre>";

    if(isset($_GET['delete']))
    {
        $userEmail = $_SESSION['email'];

        $sql = "DELETE FROM r_user WHERE Email= ?";

        $stmt = mysqli_prepare($connection, $sql);

        if (!$stmt) {
            die("Error preparing statement: " . mysqli_error($connection));
          }
          
        mysqli_stmt_bind_param($stmt, "s", $userEmail);


        if (mysqli_stmt_execute($stmt)) {
            if (mysqli_stmt_affected_rows($stmt) > 0) {
              echo "Record deleted successfully!";
              header("Location: index.php");
            } else {
              echo "No record found with email: " . $userEmail;
            }
          } else {
            echo "Error deleting record: " . mysqli_stmt_error($stmt);
          }
          
          mysqli_stmt_close($stmt);
          

    }

    mysqli_close($connection);
