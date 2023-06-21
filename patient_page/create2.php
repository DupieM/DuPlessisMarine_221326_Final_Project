<?php

    include '../db.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $medicalaidnum = $_POST['medicalaidnum'];
    $profileimage = $_POST['image'];

    $sql = "INSERT INTO patients (Name, Surname, Age, Gender, Email, Password, Phone_Number, Medical_Aid_Number, Profile_pic) VALUES 
    ('$name','$surname','$age','$gender','$email','$password','$phonenumber','$medicalaidnum','$profileimage')";

    $conn->query($sql);
    $conn->close();

    header("location: create_patients.php");

?>