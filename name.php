<?php

    include 'db.php';

    $sql = "SELECT * FROM receptionists WHERE SignIn_ID = '1'";
    $result = $conn->query($sql);

    // Will display name on welcome page
    if ($row = $result->fetch_assoc()) {
        echo $row['Name'];
    }

    $conn->close();

?>