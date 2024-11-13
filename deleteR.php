
<?php

include('config.php');

if(isset($_GET['Labor_ID'])) //Check if id is passed via POST or GET
{
    $Labor_ID = $_GET['Labor_ID'];

    //DELETE query
    $stmt = $conn->prepare("DELETE FROM labor WHERE Labor_ID = $Labor_ID");

    if($stmt ->execute()){
        echo "Record Delected Successfully.";
    }
    else{
        echo "Error in Delecting Record:  ".$stmt->error;
    }

    $stmt->close(); //Close the statement
}

else{
    echo "No ID specified for delection.";
}

header('location:/CRUD/readR.php');

$conn->close(); //Close the connection
?>

<?php
include('config.php');

if(isset($_GET['Equipment_ID'])) //Check if id is passed via POST or GET
{
    $Equipment_ID = $_GET['Equipment_ID'];

    //DELETE query
    $stmt = $conn->prepare("DELETE FROM equipment WHERE Equipment_ID = $Equipment_ID");

    if($stmt ->execute()){
        echo "Record Delected Successfully.";
    }
    else{
        echo "Error in Delecting Record:  ".$stmt->error;
    }

    $stmt->close(); //Close the statement
}

else{
    echo "No ID specified for delection.";
}

header('location:/CRUD/readR.php');

$conn->close(); //Close the connection
?>

<?php

include('config.php');

if(isset($_GET['Material_ID'])) //Check if id is passed via POST or GET
{
    $Material_ID = $_GET['Material_ID'];

    //DELETE query
    $stmt = $conn->prepare("DELETE FROM material WHERE Material_ID = $Material_ID");

    if($stmt ->execute()){
        echo "Record Delected Successfully.";
    }
    else{
        echo "Error in Delecting Record:  ".$stmt->error;
    }

    $stmt->close(); //Close the statement
}

else{
    echo "No ID specified for delection.";
}

header('location:/CRUD/readR.php');

$conn->close(); //Close the connection
?>