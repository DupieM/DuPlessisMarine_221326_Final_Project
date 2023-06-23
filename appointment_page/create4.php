<?php
    error_reporting(0);

    include '../db.php';

    $name = $_GET['name'];
    $surname = $_GET['surname'];

    $sql = "SELECT ID, Name, Surname, Email, Phone_Number, Medical_Fund, Medical_Aid_Number FROM patients WHERE Name = '$name' AND Surname = '$surname'";

    $result = $conn->query($sql);

    $sqlD = "SELECT Name, Surname, ID FROM docters";
    $resultD = $conn->query($sqlD);

    $sqlR = "SELECT Name, Surname, ID FROM receptionists";
    $resultR = $conn->query($sqlR);


    if($row = $result->fetch_assoc()) {
        echo '<form class="form-inline m-2" action="create5.php" method="POST">';
        echo '<input type="hidden" name="id" value="'.$row['ID'].'" style="border: none;font-size: large;width: 150px;background-color: lightBlue;color: #1F6C74;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 160px;">Name:</label>';
        echo '<input type="text" name="name" value="'.$row['Name'].'" style="width: 190px;font-size: 17pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 120px;">Surname:</label>';
        echo '<input type="text" name="surname" value="'.$row['Surname'].'" style="width: 190px;font-size: 17pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 168px;">Email:</label>';
        echo '<input type="text" name="email" value="'.$row['Email'].'" style="width: 190px;font-size: 17pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 30px;">Phone Number:</label>';
        echo '<input type="text" name="phonenumber" value="'.$row['Phone_Number'].'" style="width: 190px;font-size: 17pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 55px;">Medical Fund:</label>';
        echo '<input type="text" name="medicalfund" value="'.$row['Medical_Fund'].'" style="width: 190px;font-size: 17pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 30px;">M/Aid Number:</label>';
        echo '<input type="text" name="medicalaidnum" value="'.$row['Medical_Aid_Number'].'" style="width: 190px;font-size: 17pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 84px;">Description:</label>';
        echo '<input type="text" name="description" style="width: 190px;font-size: 17pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 56px;">Select Doctor:</label>';
        echo '<select name="app_doctor"  style="width: 189px;font-size: 17pt;color: #073D51;height: 42px;">';
        echo '<option name="doctor_select" value="none"></option>';

        while ($rowD = $resultD->fetch_assoc()) {
            echo '<option name="doctor_select" value="' . $rowD['ID'] . '"> ' . $rowD['Name'] . ' ' . $rowD['Surname'] . '</option>';
        }
        
        echo '</select>';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 86px;">Booking by:</label>';
        echo '<select name="app_recep"  style="width: 189px;font-size: 17pt;color: #073D51;height: 42px;">';
        echo '<option name="doctor_select" value="none"></option>';

        while ($rowR = $resultR->fetch_assoc()) {
            echo '<option name="doctor_select" value="' . $rowR['ID'] . '"> ' . $rowR['Name'] . '</option>';
        }
        
        echo '</select>';
        echo '<label for="name"style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 178px;">Date:</label>';
        echo '<input type="date" id="date" name="date"  style="width: 191px;font-size: 17pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 23pt;font-weight: 500;color: #073D51;margin-right: 9px;padding-left: 174px;">Time:</label>';
        echo '<input type="time" name="time" style="width: 192px;font-size: 17pt;color: #073D51;">';
        echo '<button type="submit" class="btn" style="border: none;background-color: #215273;color: #FE5955;font-size: 16pt;;font-weight: 600;margin-top: 12px;margin-bottom: 20px;margin-left: 190px;"">';
        echo 'Make Booking';
        echo '</button>';
        echo '</form>';
    }

    
    $conn->close();


?>