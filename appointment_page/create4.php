<?php

    include '../db.php';


    // $sql = "INSERT INTO appointments (Name) VALUES 
    // ('$name')";

    $sql = "SELECT ID FROM patients WHERE Surname = 'Smith' ";



   
        // echo '<label for="name" style="font-weight: bold;color: #1F6C74;">Name:</label>';
        // echo '<input type="text" name="name" value=".$sql." style="border: none;font-size: large;width: 130px;background-color: lightBlue;color: #1F6C74;">';

    

    $conn->query($sql);
    $conn->close();

    header("location: book_appointment.php");

?>