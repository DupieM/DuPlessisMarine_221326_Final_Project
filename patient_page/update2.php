<?php
    include '../db.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $Medicalaidnum = $_POST['Medicalaidnum'];

    $sql = "UPDATE patients SET Name='$name', Surname='$surname', Age='$age', Gender='$gender', Email='$email',
    Phone_Number='$phonenumber', Medical_Aid_Number='$Medicalaidnum' WHERE id='$id'";

    $result = $conn->query($sql);
    $conn->close();
    header("location: patients.php");
?>