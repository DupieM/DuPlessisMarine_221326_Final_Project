<?php

    include '../db.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $specialisation = $_POST['specialisation'];
    $roomnumber = $_POST['roomnumber'];
    $profileimage = $_POST['image'];

    $sql = "INSERT INTO docters (Name, Surname, Age, Gender, Email, Password, Phone_Number, Specialisation, Room_Number, Profile_pic) 
    VALUES ('$name', '$surname','$age','$gender','$email','$password','$phonenumber','$specialisation','$roomnumber','$profileimage')";

    $conn->query($sql);
    $conn->close();

    header("location: create_docters.php");
?>