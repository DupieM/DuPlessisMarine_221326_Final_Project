<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Log In</title>

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div style="height: 786px;background-color: #ECFFFD;width: 1440px">

            <img src="img\dv logo.png" alt="Logo" class="logo" style="margin-bottom: 640px;margin-left: 305px;">

            <div style="margin-top: -500px;margin-left: 200px;width: 400px;text-align: center;">
                <h1 style="font-weight: bold; font-size: 45pt;text-decoration: none;color: #215273;">Hello</h1>
                <!-- Display name of receptionist that is logged in -->
                <h1 style="font-weight: bold; font-size: 45pt;text-decoration: none;color: #215273; margin-top: -15px;"><?php include 'name.php'; ?></h1>
                </br>
                </br>
                <a class="btn" href="appointment_page\appointment.php" role="button" style="border: none;background-color: #215273;color: #FE5955;font-size: 20pt;margin-top: 12px;font-weight: bold;">
                    Go to Appointments
                </a>
            </div>
    
            <img src="img\login.png" alt="image of patern" style="height: 795.5px;margin-left: 815.5px;margin-top: -550px;">
            
        </div>
        

    </body>
</html>