<?php 
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "cms_project management");

    //Create connection
    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    //Check Connection
    if(!$connection){
        die("Connection Failed!");
    }
    
?>