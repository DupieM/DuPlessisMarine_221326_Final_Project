<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="..\style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Patients</title>
    </head>

    <body style="background-color:#ECFFFD;">
        <div class="topnav">
            <a href="..\appointment_page\appointment.php" style="margin-left: 0px;"><img src="..\img\dv logo.png" alt="logo" height="79" style="padding: 5px;"></a>
            <a href="..\docter_page\docters.php" style="margin-left: 420px;font-size: 18pt;font-weight: 500;color: #87E4DA;text-decoration-line: none;"><img src="..\img\icon_doc.png" alt="doc" height="51">Doctors</a>
            <a href="patients.php" style="margin-left: 10px;font-size: 18pt;font-weight: bold;color: #87E4DA;text-decoration-line: none;"><img src="..\img\icon_pat.png" alt="pat" height="51">Patients</a>
            <a href="..\receptionist_page\receptionist.php" style="margin-left: 10px;font-size: 18pt;font-weight: 500;color: #87E4DA;text-decoration-line: none;"><img src="..\img\icon_recept.png" alt="pat" height="51">Receptionists</a>
            <a href="..\logout.php"  style="margin-left: 340px;">
                <button style="border-radius: 10px; background-color: #1F6C74;border-color: #7CE495;color: #7CE495;border-width: 3px;font-size: 18pt;">
                    Log out
                </button>
            </a>
        </div>

        </br>

        <div style="text-align: center;">
            <h1 style="color: #215273; font-size: 40pt; font-weight: 400;">Patients List</h1>
            <?php include 'pat_bt_read.php'; ?>
        </div>

        </br>
        </br>

        <div style="margin-left: 160px;margin-right: 20px;">
        <div class="row justify-content-center">
            <?php include 'pat_read.php'; ?>
        </div>
        </div>

    </body>
</html>