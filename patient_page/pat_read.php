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

    if ($SuperUser_Global == true) {

        while($row = $result->fetch_assoc()) {
            echo '<div class="col-4">';
            echo '<img src="../img/'.$row['Profile_pic'].'" style="width: 260px; height: 410px;border: 2px solid #00ABB2;">';
            echo '<div style="width: 260px; height: 430px;background-color: lightblue;margin-top: -10px;">';
            echo '<form class="form-inline m-2" action="update.php" method="POST" style="width: 140px;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Name & Surname:</label>';
            echo '<input type="text" name="name" value="'.$row['Name'].' '.$row['Surname'].'" style="border: none;font-size: large;width: 150px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Age:</label>';
            echo '<input type="text" class="card-text" name="idnumber" value="'.$row['Age'].'" style="border: none;font-size: large;width: 130px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Gender:</label>';
            echo '<input type="text" class="card-text" name="dateofbirth" value="'.$row['Gender'].'" style="border: none;font-size: large;width: 130px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Email:</label>';
            echo '<input type="text" class="card-text" name="gender" value="'.$row['Email'].'" style="border: none;font-size: large;width: 190px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Phone Number:</label>';
            echo '<input type="text" class="card-text" name="role" value="'.$row['Phone_Number'].'" style="border: none;font-size: large;width: 130px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Medical Aid Num:</label>';
            echo '<input type="text" class="card-text" name="role" value="'.$row['Medical_Aid_Number'].'" style="border: none;font-size: large;width: 170px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Medical Fund:</label>';
            echo '<input type="text" class="card-text" name="role" value="'.$row['Medical_Fund'].'" style="border: none;font-size: large;width: 170px;background-color: lightBlue;color: #1F6C74;">';
            echo '<a class="btn" href="list_view2.php?id=' . $row['ID'] . '" role="button" style="margin-top: 7px;margin-left: 20px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Update</a>';//EDIT
            echo '<a class="btn" href="delete2.php?id=' . $row['ID'] . '" role="button" style="margin-top: -41px;margin-left: 130px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Delete</a>';//UPDATE
            echo '</form>';
            echo '</div>';
            echo '</br>';
            echo '</br>';
            echo '</div>';
        }
    
    }else if ($SuperUser_Global == false) {

        while($row = $result->fetch_assoc()) {
            echo '<div class="col-5">';
            echo '<img src="../img/'.$row['Profile_pic'].'" style="width: 260px; height: 410px;border: 2px solid #00ABB2;">';
            echo '<div style="width: 260px; height: 430px;background-color: lightblue;margin-top: -10px;">';
            echo '<form class="form-inline m-2" action="update.php" method="POST" style="width: 140px;">';
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
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Medical Aid Num:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 160px;">'.$row['Medical_Aid_Number'].'</h1>';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Medical Fund:</label>';
            echo '<h1 style="color: #1F6C74;font-size: medium;width: 140px;">'.$row['Medical_Fund'].'</h1>';
            echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
            echo '</form>';
            echo '</div>';
            echo '</br>';
            echo '</br>';
            echo '</div>';

        }
    }


    $conn->close();

?>