<?php

    include 'db.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $specialisation = $_POST['specialisation'];
    $roomnumber = $_POST['roomnumber'];
    $profileimage = $_POST['image'];

    $sql = "INSERT INTO docters (Name, Surname, Age, Gender, Email, Phone_Number, Specialisation, Room_Number) VALUES ('$name', 
    '$surname','$gender','$age','$email','$phonenumber','$specialisation','$roomnumber')";

    $conn->query($sql);
    $conn->close();

    header("location: create_docters.php");

?>