<?php
    include 'db.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST[''];
    $age = $_POST[''];
    $gender = $_POST[''];
    $email = $_POST[''];
    $phonenumber = $_POST[''];
    $specialisation = $_POST[''];
    $roomnumber = $_POST[''];

    $sql = "UPDATE docters SET Name='$name', Surname='$surname', Age='$age', Gender='$gender', Email='$email',
    Phone_Number='$phonenumber', Specialisation='$specialisation', Room_Number='$roomnumber' WHERE id='$id'";

    $result = $conn->query($sql);
    $conn->close();
    header("location: ??.php");
?>