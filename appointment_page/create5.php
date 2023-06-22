<?php

    include '../db.php';

    $Pid = $_POST['id'];
    $day = $_POST['date'];
    $time = $_POST['time'];
    $Did = $_POST['app_doctor'];
    $Rid = $_POST['app_recep'];
    $mad = $_POST['medicalaidnum'];
    $mf = $_POST['medicalfund'];
    $description = $_POST['description'];

    $sql = "INSERT INTO appointments (Patients_ID, Day, Time, Docter_ID, Receptionist_ID, Medical_Aid_Number, Medical_Fund, Description) 
    VALUES ('$Pid', '$day','$time','$Did','$Rid','$mad','$mf','$description')";

    $conn->query($sql);
    $conn->close();

    header("location: book_appointment.php");
?>