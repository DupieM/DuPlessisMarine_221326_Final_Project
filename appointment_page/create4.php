<?php
    // error_reporting(0);

    include '../db.php';

    $name = $_GET['name'];
    $surname = $_GET['surname'];

    $sql = "SELECT ID, Name, Surname, Email, Phone_Number, Medical_Fund, Medical_Aid_Number FROM patients WHERE Name = '$name' AND Surname = '$surname'";

    $result = $conn->query($sql);

    $sqlD = "SELECT Name, Surname, ID FROM docters";
    $resultD = $conn->query($sqlD);

    if($row = $result->fetch_assoc()) {
        echo '';
        echo '<input type="hidden" name="id" value="'.$row['ID'].'" style="border: none;font-size: large;width: 150px;background-color: lightBlue;color: #1F6C74;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Name:</label>';
        echo '<input type="text" name="name" value="'.$row['Name'].'" style="width: 140px;font-size: 12pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Surname:</label>';
        echo '<input type="text" name="surname" value="'.$row['Surname'].'" style="width: 140px;font-size: 12pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Email:</label>';
        echo '<input type="text" name="email" value="'.$row['Email'].'" style="width: 140px;font-size: 12pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Phone Number:</label>';
        echo '<input type="text" name="phonenumber" value="'.$row['Phone_Number'].'" style="width: 140px;font-size: 12pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Medical Fund:</label>';
        echo '<input type="text" name="medicalfund" value="'.$row['Medical_Fund'].'" style="width: 140px;font-size: 12pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Medical Aid Number:</label>';
        echo '<input type="text" name="medicalaidnum" value="'.$row['Medical_Aid_Number'].'" style="width: 140px;font-size: 12pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Description:</label>';
        echo '<input type="text" name="description" style="width: 100px;font-size: 12pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Select Doctor:</label>';
        echo '<select name="app_doctor"  style="width: 100px;font-size: 12pt;color: #073D51;">';
        echo '<option name="doctor_select" value="none"></option>';

        while ($rowD = $resultD->fetch_assoc()) {
            echo '<option name="doctor_select" value="' . $rowD['ID'] . '"> ' . $rowD['Name'] . ' ' . $rowD['Surname'] . '</option>';
        }
        
        echo '</select>';
        echo '<label for="name"style="font-size: 20pt;font-weight: 500;color: #073D51;">Date:</label>';
        echo '<input type="date" id="date" name="dateofbirth"  style="width: 100px;font-size: 12pt;color: #073D51;">';
        echo '<label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Time:</label>';
        echo '<input type="text" name="time"  style="width: 100px;font-size: 12pt;color: #073D51;">';
        echo '';
    }

    
    $conn->close();


?>