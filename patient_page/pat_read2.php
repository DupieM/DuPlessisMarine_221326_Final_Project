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
        echo '<th>Medical Aid Number</th>';
        echo '<th>Medical Fund</th>';
        echo '</tr>';

        echo "<tr>";
        if ($row['ID'] == $id){
            echo '<form class="form-inline m-2" action="update2.php" method="POST">';
            echo '<td><input type="text" name="name" value="'.$row['Name'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" name="surname" value="'.$row['Surname'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="number" class="card-text" name="age" value="'.$row['Age'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="gender" value="'.$row['Gender'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="email" value="'.$row['Email'].'" style="border: none;font-size: large;width: 170px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="phonenumber" value="'.$row['Phone_Number'].'" style="border: none;font-size: large;width: 130px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="Medicalaidnum" value="'.$row['Medical_Aid_Number'].'" style="border: none;font-size: large;width: 170px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><input type="text" class="card-text" name="Medicalfund" value="'.$row['Medical_Fund'].'" style="border: none;font-size: large;width: 170px;background-color: #ECFFFD;color: #1F6C74;"></td>';
            echo '<td><button type="submit" class="btn" style="background-color: #215273;color: #FE5955;font-size: 12pt;font-weight: 700;">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
            echo '</form>';
        }else{
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Surname'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Gender'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Phone_Number'] . "</td>";
            echo "<td>" . $row['Medical_Aid_Number'] . "</td>";
            echo "<td>" . $row['Medical_Fund'] . "</td>";
        }
        
        echo "</tr>";
        
    }

    $conn->close();

?>