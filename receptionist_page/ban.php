<?php
    include '../db.php';

    // Will change status value in database to disabled to say the chosen account is banned
    $id = $_GET['id'];
    $sql = "UPDATE receptionists SET Status = 'Disabled' WHERE id = $id";

    $conn->query($sql);
    $conn->close();

    header("location: receptionist.php");

?>