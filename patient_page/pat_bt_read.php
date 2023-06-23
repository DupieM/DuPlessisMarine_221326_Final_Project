<?php
    include '../db.php';

    // Find wether or not the current user is a superuser
    $sql_test = "SELECT * FROM receptionists WHERE SignIn_ID = '1'";
    $result_test = $conn->query($sql_test);

    while ($row_test = $result_test->fetch_assoc()) {

        if ($row_test['Rank'] == 'Master') {
            $SuperUser_Global = true;
        } else if ($row_test['Rank'] == 'General') {
            $SuperUser_Global = false;
        }

    }

    $sql= "SELECT * FROM patients";

    $result = $conn->query($sql);

    // If the user is a master
    if ($SuperUser_Global == true) {

        if($row = $result->fetch_assoc()) {
            echo '<a class="btn" href="create_patients.php" role="button" style="border: none;background-color: #215273;color: #FE5955;font-size: large;font-weight: 600;">';
            echo 'Add Patient';
            echo '</a>';
         
        }
    
    }else if ($SuperUser_Global == false) {

        if($row = $result->fetch_assoc()) {
            echo '';
        }

    }

    

    $conn->close();

?>