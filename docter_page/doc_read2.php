<?php
    include '../db.php';

    $id = $_GET['id'];

    $sql= "SELECT * FROM docters WHERE id='$id'";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th style="border: 2px solid #13484E;width: 60px;text-align: center;background-color: #359D9E;color: #13484E;font-size: 16pt;padding: 10px;">Name</th>';
        echo '<th style="border: 2px solid #13484E;width: 60px;text-align: center;background-color: #359D9E;color: #13484E;font-size: 16pt;padding: 10px;">Surname</th>';
        echo '<th style="border: 2px solid #13484E;width: 60px;text-align: center;background-color: #359D9E;color: #13484E;font-size: 16pt;padding: 10px;">Age</th>';
        echo '<th style="border: 2px solid #13484E;width: 60px;text-align: center;background-color: #359D9E;color: #13484E;font-size: 16pt;padding: 10px;">Gender</th>';
        echo '<th style="border: 2px solid #13484E;width: 60px;text-align: center;background-color: #359D9E;color: #13484E;font-size: 16pt;padding: 10px;">Email</th>';
        echo '<th style="border: 2px solid #13484E;width: 60px;text-align: center;background-color: #359D9E;color: #13484E;font-size: 16pt;padding: 10px;">Phone Number</th>';
        echo '<th style="border: 2px solid #13484E;width: 60px;text-align: center;background-color: #359D9E;color: #13484E;font-size: 16pt;padding: 10px;">Specialisation</th>';
        echo '<th style="border: 2px solid #13484E;width: 60px;text-align: center;background-color: #359D9E;color: #13484E;font-size: 16pt;padding: 10px;">Room Number</th>';
        echo '</tr>';

        echo "<tr>";
        if ($row['ID'] == $id){
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<td style="border: 2px solid #13484E;background-color: #00ABB2;padding: 20px;"><input type="text" name="name" value="'.$row['Name'].'" style="border: none;font-size: 14pt;font-weight: 600;width: 120px;background-color: #87E4DA;color: #1F6C74;text-align: center;"></td>';
            echo '<td style="border: 2px solid #13484E;background-color: #00ABB2;padding: 20px;"><input type="text" name="surname" value="'.$row['Surname'].'" style="border: none;font-size: 14pt;font-weight: 600;width: 120px;background-color: #87E4DA;color: #1F6C74;text-align: center;"></td>';
            echo '<td style="border: 2px solid #13484E;background-color: #00ABB2;padding: 20px;"><input type="number" class="card-text" name="age" value="'.$row['Age'].'" style="border: none;font-size: 14pt;font-weight: 600;width: 120px;background-color: #87E4DA;color: #1F6C74;text-align: center;"></td>';
            echo '<td style="border: 2px solid #13484E;background-color: #00ABB2;padding: 20px;"><input type="text" class="card-text" name="gender" value="'.$row['Gender'].'" style="border: none;font-size: 14pt;font-weight: 600;width: 120px;background-color: #87E4DA;color: #1F6C74;text-align: center;"></td>';
            echo '<td style="border: 2px solid #13484E;background-color: #00ABB2;padding: 20px;"><input type="text" class="card-text" name="email" value="'.$row['Email'].'" style="border: none;font-size: 14pt;font-weight: 600;width: 160px;background-color: #87E4DA;color: #1F6C74;text-align: center;"></td>';
            echo '<td style="border: 2px solid #13484E;background-color: #00ABB2;padding: 20px;"><input type="text" class="card-text" name="phonenumber" value="'.$row['Phone_Number'].'" style="border: none;font-size: 14pt;font-weight: 600;width: 120px;background-color: #87E4DA;color: #1F6C74;text-align: center;"></td>';
            echo '<td style="border: 2px solid #13484E;background-color: #00ABB2;padding: 20px;"><input type="text" class="card-text" name="specialisation" value="'.$row['Specialisation'].'" style="border: none;font-size: 14pt;font-weight: 600;width: 160px;background-color: #87E4DA;color: #1F6C74;text-align: center;"></td>';
            echo '<td style="border: 2px solid #13484E;background-color: #00ABB2;padding: 20px;"><input type="text" class="card-text" name="roomnumber" value="'.$row['Room_Number'].'" style="border: none;font-size: 14pt;font-weight: 600;width: 120px;background-color: #87E4DA;color: #1F6C74;text-align: center;"></td>';
            echo '<input type="hidden" name="id" value="'.$row['ID'].'">';
            echo '<button type="submit" class="btn" style="background-color: #215273;color: #FE5955;font-size: 17pt;font-weight: 700;margin-top: -25px; margin-bottom: 20px;margin-left: 680px;">Save</button>';
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