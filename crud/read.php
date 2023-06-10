<?php
    include 'db.php';

    $sql= "SELECT * FROM docters";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo '<div class="col mb-6">';
        echo '<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);width: 350px;border-radius: 0px; width: 280px; background-color: lightBlue;">';
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<label for="name">Name & Surname:</label>';
        echo '<input type="text" class="card-text" name="name" value="'.$row['Name'].' '.$row['Surname'].'" style="border: none;font-size: large;width: 270px;">';
        echo '<label for="name">Age:</label>';
        echo '<input type="text" class="card-text" name="idnumber" value="'.$row['Age'].'" style="border: none;font-size: large;width: 270px;">';
        echo '<label for="name">Gender:</label>';
        echo '<input type="text" class="card-text" name="dateofbirth" value="'.$row['Gender'].'" style="border: none;font-size: large;width: 270px;">';
        echo '<label for="name">Email:</label>';
        echo '<input type="text" class="card-text" name="gender" value="'.$row['Email'].'" style="border: none;font-size: large;width: 270px;">';
        echo '<label for="name">Phone Number:</label>';
        echo '<input type="text" class="card-text" name="role" value="'.$row['Phone_Number'].'" style="border: none;font-size: large;width: 270px;">';
        echo '<label for="name">Specialisation:</label>';
        echo '<input type="text" class="card-text" name="role" value="'.$row['Specialisation'].'" style="border: none;font-size: large;width: 270px;">';
        echo '<label for="name">Room Number:</label>';
        echo '<input type="text" class="card-text" name="role" value="'.$row['Room_Number'].'" style="border: none;font-size: large;width: 270px;">';
        echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
        echo '</br>';
        echo '</br>';
        echo '<a class="btn btn-primary" href="index.php?id=' . $row['ID'] . '" role="button">Update</a>';//EDIT
        echo '<a class="btn btn-danger" href="delete.php?id=' . $row['ID'] . '" role="button">Delete</a>';//UPDATE
        echo '<img src="img/'.$row['Profile_pic'].'" style="margin: auto;width: 260px; height: 360px;">';
        echo '</form>';
        echo '</div>';
        
        echo '</br>';
        echo '</div>';
        
    }

    $conn->close();

?>