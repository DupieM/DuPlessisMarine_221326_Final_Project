<?php

    include 'db.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $rank = $_POST['rank'];
    $profileimage = $_POST['image'];

    $sql = "INSERT INTO receptionists (Name, Surname, Age, Gender, Phone_Number, Email, Password, Rank, Profile_pic) VALUES 
    ('$name','$surname','$age','$gender','$phonenumber','$email','$password','$rank','$profileimage')";

    $conn->query($sql);
    $conn->close();

    header("location: create_receptionist.php");

?>