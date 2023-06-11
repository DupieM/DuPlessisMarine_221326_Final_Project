<?php

    include 'db.php';

    $name = $_POST['name'];
    $surname = $_POST[''];
    $age = $_POST[''];
    $gender = $_POST[''];
    $email = $_POST[''];
    $phonenumber = $_POST[''];
    $specialisation = $_POST[''];
    $roomnumber = $_POST[''];

    $sql = "INSERT INTO demo_table (Name, Surname, Age, Gender, Email, Phone_Number, Specialisation, Room_Number) VALUES ('$name', 
    '$surname','$age','$email','$phonenumber','$specialisation','$roomnumber')";

    $conn->query($sql);
    $conn->close();

    header("location: ??.php");

?>