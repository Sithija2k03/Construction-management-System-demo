
<?php

include 'Connection.php';


if (isset($_GET['Item_ID'])) {
    $Item_ID = $_GET['Item_ID'];


    $stmt = $connection->prepare("DELETE FROM inventory WHERE Item_ID = $Item_ID");
    

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
}
 else {
         echo "No ID specified for deletion.";
      }

header('location:/CMS/read.php');


$connection->close();
?>



<?php

include 'Connection.php';

if (isset($_GET['Utilization_No'])) {
    $Utilization_No = $_GET['Utilization_No'];

    
    $stmt = $connection->prepare("DELETE FROM utilization WHERE Utilization_No = $Utilization_No");
    

    
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error; 
    }

    
    $stmt->close();
}
 else {
    echo "No ID specified for deletion.";
}

header('location:/CMS/read.php');


$connection->close();
?>



<?php

include 'Connection.php';


if (isset($_GET['Pay_ID'])) {
    $Pay_ID = $_GET['Pay_ID'];


    $stmt = $connection->prepare("DELETE FROM payment WHERE Pay_ID = $Pay_ID");


    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
}
 else {
    echo "No ID specified for deletion.";
}

header('location:/CMS/read.php');


$connection->close();
?>

