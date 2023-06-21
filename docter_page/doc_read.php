<?php
    include 'db.php';

    $sql= "SELECT * FROM docters";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo '<div class="col-5">';
        echo '<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 0px;background-color: lightBlue; width: 509px; height: 470px;">';
        echo '<div style="width: 170px;">';
        if ($row['ID'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Name & Surname:</label>';
            echo '<input type="text" name="name" value="'.$row['Name'].' '.$row['Surname'].'" style="border: none;font-size: large;width: 130px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Age:</label>';
            echo '<input type="text" class="card-text" name="idnumber" value="'.$row['Age'].'" style="border: none;font-size: large;width: 130px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Gender:</label>';
            echo '<input type="text" class="card-text" name="dateofbirth" value="'.$row['Gender'].'" style="border: none;font-size: large;width: 130px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Email:</label>';
            echo '<input type="text" class="card-text" name="gender" value="'.$row['Email'].'" style="border: none;font-size: large;width: 170px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Phone Number:</label>';
            echo '<input type="text" class="card-text" name="role" value="'.$row['Phone_Number'].'" style="border: none;font-size: large;width: 130px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Specialisation:</label>';
            echo '<input type="text" class="card-text" name="role" value="'.$row['Specialisation'].'" style="border: none;font-size: large;width: 170px;background-color: lightBlue;color: #1F6C74;">';
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Room Number:</label>';
            echo '<input type="text" class="card-text" name="role" value="'.$row['Room_Number'].'" style="border: none;font-size: large;width: 140px;background-color: lightBlue;color: #1F6C74;">';
            echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
            echo '<button type="submit" class="btn" style="margin-top: -90px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Save</button>';
            echo '<img src="img/'.$row['Profile_pic'].'" style="margin-left: 210px;margin-top: -380px;width: 290px; height: 470px;">';
            echo '</form>';
        }else{
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Name & Surname:</label>';
            echo $row['Name'];
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Age:</label>';
            echo $row['Age'];
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Gender:</label>';
            echo $row['Gender'];
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Email:</label>';
            echo $row['Email'];
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Phone Number:</label>';
            echo $row['Phone_Number'];
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Specialisation:</label>';
            echo $row['Specialisation'];
            echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Room Number:</label>';
            echo $row['Room_Number'];
            echo '<a class="btn" href="docters.php?id=' . $row['ID'] . '" role="button" style="margin-top: -90px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Update</a>';//EDIT
        }

        echo '<a class="btn" href="delete.php?id=' . $row['ID'] . '" role="button" style="margin-top: -90px;margin-left: 110px;background-color: #215273;color: #55C595;font-size: large;font-weight: bold;">Delete</a>';//UPDATE
        echo '</div>';
        echo '</div>';
        echo '</br>';
        echo '</br>';
        echo '</div>';
        
    }

    $conn->close();

?>