<?php 

    //connection integration
    require_once('connection.php');

    // Create database
    $sql = "DROP DATABASE sagu_foundation";
    if (mysqli_query($conn, $sql)) {
        echo "Database dropped successfully";
    } else {
        echo "Error dropping database: " . mysqli_error($conn);
    }

?>