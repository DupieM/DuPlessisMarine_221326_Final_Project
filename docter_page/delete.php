<?php
    include '../db.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM docters WHERE id = $id";

    $conn->query($sql);
    $conn->close();

    header("location: docters.php");

?>