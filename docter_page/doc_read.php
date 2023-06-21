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

    // If the user is a master
    if ($SuperUser_Global == true) {

        while($row = $result->fetch_assoc()) {
            echo '<div class="col-5">';
            echo '<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 0px;background-color: lightBlue; width: 509px; height: 470px;">';
            echo '<div style="width: 170px;">';
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Name & Surname:</label>';
            echo '<h1 style="color: #1F6C74;font-size: large;font-weight: 400;width: 140px;">' . $row['Name'] . ' ' . $row['Surname'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Age:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Age'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Gender:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Gender'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Email:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Email'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Phone Number:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Phone_Number'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Specialisation:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 160px;">' . $row['Specialisation'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Room Number:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Room_Number'] . '</h1>';
            echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
            echo '<img src="../img/'.$row['Profile_pic'].'" style="margin-left: 210px;margin-top: -370px;width: 290px; height: 470px;">';
            echo '<a class="btn" href="list_view.php?id=' . $row['ID'] . '" role="button" style="margin-top: -90px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Update</a>';//EDIT
            echo '<a class="btn" href="delete.php?id=' . $row['ID'] . '" role="button" style="margin-top: -90px;margin-left: 110px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Delete</a>';//UPDATE
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</br>';
            echo '</br>';
            echo '</div>';
        }
    
    }else if ($SuperUser_Global == false) {

        while($row = $result->fetch_assoc()) {
            echo '<div class="col-5">';
            echo '<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 0px;background-color: lightBlue; width: 509px; height: 470px;">';
            echo '<div style="width: 170px;">';
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Name & Surname:</label>';
            echo '<h1 style="color: #1F6C74;font-size: large;font-weight: 400;width: 140px;">' . $row['Name'] . ' ' . $row['Surname'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Age:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Age'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Gender:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Gender'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Email:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Email'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Phone Number:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Phone_Number'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Specialisation:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 160px;">' . $row['Specialisation'] . '</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Room Number:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">' . $row['Room_Number'] . '</h1>';
            echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
            echo '<img src="../img/'.$row['Profile_pic'].'" style="margin-left: 210px;margin-top: -370px;width: 290px; height: 470px;">';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</br>';
            echo '</br>';
            echo '</div>';

        }
    }

    

    $conn->close();

?>