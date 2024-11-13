<?php

include 'DBconnect.php';

if (isset($_GET['project_id'])) {
    $project_id = $_GET['project_id'];

    $stmt = $connection->prepare("DELETE FROM projects WHERE project_id = $project_id");

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

header('location:/CMS/project_crud.php');

$connection->close();
?>