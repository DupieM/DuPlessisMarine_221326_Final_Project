<?php
    include '../db.php';

    $id = $_GET['id'];

    $sql= "SELECT * FROM patients WHERE id='$id'";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Surname</th>';
        echo '<th>Age</th>';
        echo '<th>Gender</th>';
        echo '<th>Email</th>';
        echo '<th>Phone Number</th>';
        echo '<th>Specialisation</th>';
        echo '</tr>';

        echo "<tr>";
        if ($row['ID'] == $id){
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<td><input type="text" name="name" value="'.$row['Name'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" name="surname" value="'.$row['Surname'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="number" class="card-text" name="age" value="'.$row['Age'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="gender" value="'.$row['Gender'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="email" value="'.$row['Email'].'" style="border: none;font-size: large;width: 170px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="phonenumber" value="'.$row['Phone_Number'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="specialisation" value="'.$row['Specialisation'].'" style="border: none;font-size: large;width: 170px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
            echo '</form>';
        }else{
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Surname'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Gender'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Phone_Number'] . "</td>";
            echo "<td>" . $row['Specialisation'] . "</td>";
            echo "<td>" . $row['Room_Number'] . "</td>";
        }
        
        echo "</tr>";
        
    }

    $conn->close();

?>