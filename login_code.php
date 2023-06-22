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

            //----exit the loop
            break;

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

    $sql_test = "SELECT * FROM receptionists";
    $result_test = $conn->query($sql_test);

    while ($row_test = $result_test->fetch_assoc()) {

        if ($row_test['Status'] == 'Disabled') {
            $SuperUser_Global = true;
        } else if ($row_test['Status'] == 'Enabled') {
            $SuperUser_Global = false;
        }

    }



// if ($SuperUser_Global = true && $SuperUser_Global = false) {

//     header("location: login.php?error=This User Account was Banned" );
    
// } else 
if ($bFoundName == false) {

    header("location: login.php?error=Incorrect Email");

} else if ($bFoundName == true && $bFoundPass == false) {

    header("location: login.php?error=Incorrect Password");

} else  if ($bFoundName == true && $bFoundPass == true) {

    header("location: index.php");

}

$conn->close();

?>