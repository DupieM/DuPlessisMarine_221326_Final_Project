<?php
    include '../db.php';

    $id = $_GET['id'];

    $sql= "SELECT * FROM receptionists WHERE id='$id'";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th style="border: 1px solid black;width: 60px;text-align: center;background-color: #00ABB2;">Name</th>';
        echo '<th style="border: 1px solid black;width: 60px;">Surname</th>';
        echo '<th style="border: 1px solid black;width: 60px;">Age</th>';
        echo '<th style="border: 1px solid black;width: 60px;">Gender</th>';
        echo '<th style="border: 1px solid black;width: 60px;">Email</th>';
        echo '<th style="border: 1px solid black;width: 60px;">Phone Number</th>';
        echo '<th style="border: 1px solid black;width: 60px;">Rank</th>';
        echo '</tr>';

        echo "<tr>";
        if ($row['ID'] == $id){
            echo '<form class="form-inline m-2" action="update3.php" method="POST">';
            echo '<td style="border: 1px solid black;background-color: #87E4DA;"><input type="text" name="name" value="'.$row['Name'].'" style="border: none;font-size: large;width: 130px;background-color: #87E4DA;color: #1F6C74;"></td>';
            echo '<td style="border: 1px solid black;"><input type="text" name="surname" value="'.$row['Surname'].'" style="border: none;font-size: large;width: 130px;background-color: #87E4DA;color: #1F6C74;"></td>';
            echo '<td style="border: 1px solid black;"><input type="number" class="card-text" name="age" value="'.$row['Age'].'" style="border: none;font-size: large;width: 130px;background-color: #87E4DA;color: #1F6C74;"></td>';
            echo '<td style="border: 1px solid black;"><input type="text" class="card-text" name="gender" value="'.$row['Gender'].'" style="border: none;font-size: large;width: 130px;background-color: #87E4DA;color: #1F6C74;"></td>';
            echo '<td style="border: 1px solid black;"><input type="text" class="card-text" name="email" value="'.$row['Email'].'" style="border: none;font-size: large;width: 170px;background-color: #87E4DA;color: #1F6C74;"></td>';
            echo '<td style="border: 1px solid black;"><input type="text" class="card-text" name="phonenumber" value="'.$row['Phone_Number'].'" style="border: none;font-size: large;width: 130px;background-color: #87E4DA;color: #1F6C74;"></td>';
            echo '<td style="border: 1px solid black;"><input type="text" class="card-text" name="rank" value="'.$row['Rank'].'" style="border: none;font-size: large;width: 170px;background-color: #87E4DA;color: #1F6C74;"></td>';
            echo '<td style="border: 1px solid #ECFFFD;"><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
            echo '</form>';
        }else{
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Surname'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Gender'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Phone_Number'] . "</td>";
            echo "<td>" . $row['Rank'] . "</td>";
        }
        
        echo "</tr>";
        
    }

    $conn->close();

?>