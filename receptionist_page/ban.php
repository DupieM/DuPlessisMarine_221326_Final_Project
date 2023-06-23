<?php
    include '../db.php';

    $id = $_GET['id'];
    $sql = "UPDATE receptionists SET Status = 'Disabled' WHERE id = $id";

    $conn->query($sql);
    $conn->close();

    header("location: receptionist.php");

?>