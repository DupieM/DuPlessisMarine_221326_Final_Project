<?php

    include 'db.php';

    $sql = "SELECT * FROM receptionists WHERE SignIn_ID = '1'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) {
        echo $row['Name'];
    }

    $conn->close();

?>