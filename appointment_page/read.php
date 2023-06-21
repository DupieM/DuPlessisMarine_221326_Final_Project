<?php
    include '../db.php';

    $sql= "SELECT * FROM appointments ORDER BY Day, Time";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {

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

        echo '<div class="col-4">';
        echo '<div style="width: 260px; height: 100px;background-color: lightblue;margin-top: -10px;">';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $Patient . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . date_format($date,"d/m") . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . date_format($time,"H:i") . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">Dr. ' . $Docter . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 170px;">Desc: ' . $row['Description'] . '</h1>';
        echo '</div>';
        echo '</br>';
        echo '</br>';
        echo '</div>';    
    }

    $conn->close();

?>