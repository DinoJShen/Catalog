<?php
    require_once 'login.php';
    $conn = new mysqli($hn,$user,$pw,$db);
    if($conn->connect_error) die ("Fatal error");   
    
    $query = file_get_contents('book.sql');
    if ($conn->query($query) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
?>