<?php
    include '../db.php';

    $sql= "SELECT * FROM appointments";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo '<div class="col-4">';
        echo '<div style="width: 260px; height: 100px;background-color: lightblue;margin-top: -10px;">';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Patients_ID'] . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Day'] . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Time'] . '</h1>';
        echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Docter_ID'] . '</h1>';
        echo '</div>';
        echo '</br>';
        echo '</br>';
        echo '</div>';    
    }

    $conn->close();

?>