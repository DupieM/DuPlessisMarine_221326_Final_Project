<?php

include 'db.php';

$sql = "SELECT * FROM receptionists";
$result = $conn->query($sql);

$Useremail = $_GET['signin_email'];
$Password = $_GET['signin_pass'];

while ($row = $result->fetch_assoc()) {

    // If the Name is correct
    if ($row['Email'] == $Useremail) {

        $bFoundName = true;

        // --Test if the password is correct
        if ($row['Password'] == $Password) {

            $bFoundPass = true;

            // ----Change which user is currently signed in
            $sql2 = "UPDATE receptionists SET SignIn_ID = '1' WHERE Password = '$Password'";
            $result = $conn->query($sql2);

            if ($row['Status'] == "Enabled") {

                $bFoundStat = true;

                //----exit the loop
                break;

            } else {

                $bFoundStat = false;

                //----exit the loop
                break;

            }

            // --Password is incorrect
        } else {
            $bFoundPass = false;

            //----exit the loop
            break;
        }

        // ----If no matching User is found
    } else {
        $bFoundName = false;
    }

}

if ($bFoundName == false) {

    header("location: login.php?error=Incorrect Email");

} else if ($bFoundName == true && $bFoundPass == false && $bFoundStat == false) {

    header("location: login.php?error=Incorrect Password");

} else if ($bFoundName == true && $bFoundPass == true && $bFoundStat == false) {

    header("location: login.php?error=You are banned");

} else if ($bFoundName == true && $bFoundPass == true && $bFoundStat == true) {

    header("location: index.php");

}

$conn->close();

// Code to try and make sure banned account can't logged in

    // Terterman the true and false

        // if ($row['Status'] == 'Enabled') {
        //      $bFoundstatus = true;

        //     if ($row['Email'] == $Useremail) {

        //         $bFoundName = true;
        
        //         // --Test if the password is correct
        //         if ($row['Password'] == $Password) {
        //             $bFoundPass = true;
        
        //             // ----Change which user is currently signed in
        //             $sql2 = "UPDATE receptionists SET SignIn_ID = '1' WHERE Password = '$Password'";
        //             $result = $conn->query($sql2);
        
        //             //----exit the loop
        //             break;
        
        
        //             // --Password is incorrect
        //         } else {
        //             $bFoundPass = false;
        
        //             //----exit the loop
        //              break;
        //         }
        
        //         // ----If no matching User is found
        //     } else {
        //         $bFoundName = false;
        //     }
        // } else {
        //     $bFoundstatus = false;
        // }

    // how the errors will appear
    
        // if ($bFoundStatus == false) {

        //     header("location: login.php?error=This user is banned"); 
    
        // } else if ($bFoundName == true && $bFoundPass == false) {
    
        //     header("location: login.php?error=Incorrect Email");
    
        // } else if ($bFoundName == true && $bFoundPass == true) {
    
        //     header("location: login.php?error=Incorrect Password");
    
        // } else {

        //     header("location: index.php");

        // }

?>