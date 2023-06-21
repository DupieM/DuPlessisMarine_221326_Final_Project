<?php

include 'db.php';
// Change all users to be signed out
$sql = "UPDATE receptionists SET SignIn_ID = '0' WHERE SignIn_ID = '1'";
$result = $conn->query($sql);

$conn->close();
header("location: login.php");

?>