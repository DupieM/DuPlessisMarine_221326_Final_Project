<?php
    include '../db.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];


    $sql = "UPDATE receptionists SET Name='$name', Surname='$surname', Age='$age', Gender='$gender', Email='$email',
    Phone_Number='$phonenumber', Rank='$rank', Status='$status' WHERE id='$id'";

    $result = $conn->query($sql);
    $conn->close();
    header("location: receptionist.php");
?>