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

    $sql= "SELECT * FROM docters";
    $result = $conn->query($sql);

    // To help derterman what to show when which receptionist in logged in
    // If the user is a master
    if ($SuperUser_Global == true) {

        if($row = $result->fetch_assoc()) {
            echo '<a class="btn" href="create_docters.php" role="button" style="border: none;background-color: #215273;color: #FE5955;font-size: large;font-weight: 600;">';
            echo 'Add Docter';
            echo '</a>';
         
        }
    
        // If user is a genereal
    }else if ($SuperUser_Global == false) {

        if($row = $result->fetch_assoc()) {
            echo '';
        }

    }

    

    $conn->close();

?>