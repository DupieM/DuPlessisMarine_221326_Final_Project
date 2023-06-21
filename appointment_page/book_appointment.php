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
                <h1 style="color: #215273; font-size: 40pt; font-weight: 400;">Add Patients</h1>
            </div>

            <div style="margin-top: 23px;width: 550px;height: 506px;background-color: rgba(255, 255, 255, 0.7);border: 2px solid black;margin-left: 451px;padding-right: 70px;">
                <form class="form-inline m-2" action="create4.php" method="POSt">
                    <label for="name" style="padding-left: 130px;font-size: 20pt;font-weight: 500;color: #073D51;">ID:</label>
                    <input type="number" class="form-control m-1" id="b_id" name="b_id" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <button type="submit" class="btn" style="border: none;background-color: #215273;color: #FE5955;font-size: 16pt;;font-weight: 600;margin-top: 12px;margin-left: 190px;">
                        Search
                    </button>
                </form>

                

            </div> 

           

        </div>

    </body>
</html>