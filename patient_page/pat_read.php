<?php
    include '../db.php';

    $sql= "SELECT * FROM patients";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo '<div class="col-4">';
        echo '<img src="../img/'.$row['Profile_pic'].'" style="width: 260px; height: 410px;border: 2px solid #00ABB2;">';
        echo '<div style="width: 260px; height: 410px;background-color: lightblue;margin-top: -10px;">';
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
        echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Medical Aid Number:</label>';
        echo '<input type="text" class="card-text" name="role" value="'.$row['Medical_Aid_Number'].'" style="border: none;font-size: large;width: 170px;background-color: lightBlue;color: #1F6C74;">';
        echo '<a class="btn" href="list_view2.php?id=' . $row['ID'] . '" role="button" style="margin-top: 7px;margin-left: 20px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Update</a>';//EDIT
        echo '<a class="btn" href="delete2.php?id=' . $row['ID'] . '" role="button" style="margin-top: -41px;margin-left: 130px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Delete</a>';//UPDATE
        echo '</form>';
        echo '</div>';
        echo '</br>';
        echo '</br>';
        echo '</div>';
    }

    $conn->close();

?>