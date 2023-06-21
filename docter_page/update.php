<?php
    include 'db.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $specialisation = $_POST['specialisation'];
    $roomnumber = $_POST['roomnumber'];

    $sql = "UPDATE docters SET Name='$name', Surname='$surname', Age='$age', Gender='$gender', Email='$email',
    Phone_Number='$phonenumber', Specialisation='$specialisation', Room_Number='$roomnumber' WHERE id='$id'";

    $result = $conn->query($sql);
    $conn->close();
    header("location: docters.php");
?>