<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Appointment</title>

        <link rel="stylesheet" href="..\style.css">
    </head>

    <body style="background-color:#ECFFFD;">
        <div class="topnav">
        <a href="..\appointment_page\appointment.php" style="margin-left: 0px;"><img src="..\img\dv logo.png" alt="logo" height="79" style="padding: 5px;"></a>
            <a href="..\docter_page\docters.php" style="margin-left: 420px;font-size: 18pt;font-weight: 500;color: #87E4DA;text-decoration-line: none;"><img src="..\img\icon_doc.png" alt="doc" height="51">Doctors</a>
            <a href="..\patient_page\patients.php" style="margin-left: 10px;font-size: 18pt;font-weight: 500;color: #87E4DA;text-decoration-line: none;"><img src="..\img\icon_pat.png" alt="pat" height="51">Patients</a>
            <a href="..\receptionist_page\receptionist.php" style="margin-left: 10px;font-size: 18pt;font-weight: 500;color: #87E4DA;text-decoration-line: none;"><img src="..\img\icon_recept.png" alt="pat" height="51">Receptionists</a>
            <a href="..\login.php"  style="margin-left: 340px;">
                <button style="border-radius: 10px; background-color: #1F6C74;border-color: #7CE495;color: #7CE495;border-width: 3px;font-size: 18pt;">
                    Log out
                </button>
            </a>
        </div>

        <div style="background-image: url('img/create_doc_recp.png');background-repeat: no-repeat;height: 710px;">
            <div style="text-align: center;">
                <h1 style="color: #215273; font-size: 40pt; font-weight: 400;">New Appointment</h1>
                <a class="btn" href="appointment.php" role="button" style="border: 2px solid #215273;background-color: #46A8A9;color: #215273;font-size: 12pt;font-weight: 600;">Return to Appointments</a>
            </div>

            <div style="margin-top: 23px;width: 570px;height: 70px;background-color: rgba(255, 255, 255, 0.7);border: 2px solid black;margin-left: 441px;">
                <form class="form-inline m-2">
                    <label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;">Name:</label>
                    <input type="text" class="form-control m-1" id="name" name="name" style="width: 100px;font-size: 12pt;color: #073D51;">
                    <label for="name" style="font-size: 20pt;font-weight: 500;color: #073D51;margin-left: 20px;">Surname:</label>
                    <input type="text" class="form-control m-1" id="surname" name="surname" style="width: 100px;font-size: 12pt;color: #073D51;">
                   
                    <button type="Submit" class="btn" style="border: none;background-color: #215273;color: #FE5955;font-size: large;font-weight: 600;margin-left: 37px;">
                        Search
                    </button>

                </form>
            </div>

            <div style="margin-top: 23px;margin-bottum: 23px;width: 550px;height: 584px;background-color: rgba(255, 255, 255, 0.7);border: 2px solid black;margin-left: 451px;padding-right: 30px;">

                <?php include 'create4.php'; ?>

            </div>

        </div>

    </body>
</html>