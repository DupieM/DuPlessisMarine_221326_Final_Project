<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Docters</title>

        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background-color:#ECFFFD;">
        <div class="topnav">
            <a href="appointment.php" style="margin-left: -16px;"><img src="img\dv logo.png" alt="logo" height="79" style="padding: 5px;"></a>
            <a href="docters.php" style="margin-left: 484px;font-size: 18pt;font-weight: 500;color: #87E4DA;"><img src="img\icon_doc.png" alt="doc" height="51">Doctors</a>
            <a href="patients.php" style="font-size: 18pt;font-weight: 500;color: #87E4DA;"><img src="img\icon_pat.png" alt="pat" height="51">Patients</a>
            <a href="login.php"  style="margin-left: 400px;">
                <button style="border-radius: 10px; background-color: #1F6C74;border-color: #7CE495;color: #7CE495;border-width: 3px;font-size: 18pt;">
                    Log out
                </button>
            </a>
        </div>

        <div class="row row-cols-1 row-cols-md-4">
            <?php include 'crud\read.php'; ?>
        </div>

    </body
</html>