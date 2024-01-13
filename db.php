<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "home_made_tree_exchange";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
