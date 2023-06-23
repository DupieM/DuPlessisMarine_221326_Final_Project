<?php
    include '../db.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM appointments WHERE id = $id";

    $conn->query($sql);
    $conn->close();

    header("location: appointment.php");

?>