<?php

    // $servername = "localhost";
    // $username = "daggrega_datadive";
    // $password = "?Ztqp9!NVzW,";
    // $db = "daggrega_datadive";

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "datadive";

    
  


     // Create connection

     $conn = mysqli_connect($servername, $username, $password,$db);
     // Check connection
     if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
     }
 
?>