<?php
    include '../db.php';

    // Dertermine what dates needs to be shown and in what order needs to be placed
    $sql= "SELECT * FROM appointments WHERE Day >= curdate() ORDER BY Day, Time";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {

        // Format the date and time for appointment
        $date=date_create($row['Day']);
        $time=date_create($row['Time']);

        $pid = $row['Patients_ID'];
        $did = $row['Docter_ID'];
        
        $sql2 = "SELECT Name, Surname FROM patients WHERE id = $pid";

        $resultP = $conn->query($sql2);
        while ($rowP = $resultP->fetch_assoc()) {
            $Patient = $rowP['Name'] . ' ' . $rowP['Surname'];
        }

        $sql3 = "SELECT Name, Surname FROM docters WHERE id = $did";

        $resultD = $conn->query($sql3);
        while ($rowD = $resultD->fetch_assoc()) {
            $Docter = $rowD['Name'] . ' ' . $rowD['Surname'];
        }

        // Show how the appointments will be displayed
        echo '<div class="col-2">';
        echo '<div style="width: 176px; height: 145px;background-color: lightblue;padding: 6px;">';
        echo '<h1 style="color: #F46F36;font-size: medium;width: 140px;">' . $Patient . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . date_format($date,"d/m") . ' ' . date_format($time,"H:i") . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">Dr. ' . $Docter . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 170px;">Desc: ' . $row['Description'] . '</h1>';
        echo '<a class="btn" href="delete4.php?id=' . $row['ID'] . '" role="button">'; 
        echo '<img src="../img/dustbin.png" style="height: 23px;margin-left: 130px; margin-top: -16px;">';
        echo '</a>'; 
        echo '</div>';
        echo '</br>';
        echo '</br>';
        echo '</div>';    
    }

    $conn->close();

?>