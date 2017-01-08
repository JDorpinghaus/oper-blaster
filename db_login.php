<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "oper";
    $dbport = 3306;
    
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    
    if ($db->connect_error) {
        echo("Connection to " . $database . " failed.");
        die("Connection failed: " . $db->connect_error);
    } 
    
    #echo "Connected to " . $database .  " as " . $username . " successfully.";

?>