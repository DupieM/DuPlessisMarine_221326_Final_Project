<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Patients</title>

        <link rel="stylesheet" href="style.css">
    </head>

    <body style="">
        <div class="topnav">
            <img src="img\dv logo.png" alt="logo" height="79" style="padding: 5px;">
            <a href="docters.php" style="margin-left: 420px;font-size: 18pt;font-weight: 500;color: #87E4DA;text-decoration-line: none;"><img src="img\icon_doc.png" alt="doc" height="51">Doctors</a>
            <a href="patients.php" style="margin-left: 10px;font-size: 18pt;font-weight: 500;color: #87E4DA;text-decoration-line: none;"><img src="img\icon_pat.png" alt="pat" height="51">Patients</a>
            <a href="receptionist.php" style="margin-left: 10px;font-size: 18pt;font-weight: 500;color: #87E4DA;text-decoration-line: none;"><img src="img\icon_recept.png" alt="pat" height="51">Receptionists</a>
            <a href="login.php"  style="margin-left: 340px;">
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
                <form class="form-inline m-2" action="create2.php" method="POST">
                <label for="name" style="padding-left: 130px;font-size: 20pt;font-weight: 500;color: #073D51;">Name:</label>
                    <input type="text" class="form-control m-1" id="name" name="name" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <label for="score" style="padding-left: 95px;font-size: 20pt;font-weight: 500;color: #073D51;">Surname:</label>
                    <input type="text" class="form-control m-1" id="surname" name="surname" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <label for="score" style="padding-left: 154px;font-size: 20pt;font-weight: 500;color: #073D51;">Age:</label>
                    <input type="number" class="form-control m-1" id="age" name="age" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <label for="score" style="padding-left: 113px;font-size: 20pt;font-weight: 500;color: #073D51;">Gender:</label>
                    <input type="text" class="form-control m-1" id="gender" name="gender" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <label for="score" style="padding-left: 136px;font-size: 20pt;font-weight: 500;color: #073D51;">Email:</label>
                    <input type="text" class="form-control m-1" id="email" name="email" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <label for="score" style="padding-left: 88px;font-size: 20pt;font-weight: 500;color: #073D51;">Password:</label>
                    <input type="text" class="form-control m-1" id="password" name="password" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <label for="score" style="padding-left: 17px;font-size: 20pt;font-weight: 500;color: #073D51;">Phone Number:</label>
                    <input type="number" class="form-control m-1" id="phonenumber" name="phonenumber" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <label for="score" style="padding-left: 9px;font-size: 20pt;font-weight: 500;color: #073D51;">Medical Aid No.:</label>
                    <input type="number" class="form-control m-1" id="medicalaidnum" name="medicalaidnum" style="width: 240px;font-size: 12pt;color: #073D51;">
                    <label for="score" style="padding-left: 26px;font-size: 20pt;font-weight: 500;color: #073D51;">Profile Picture:</label>
                    <input type="file" name="image" id ="image" accept=".jpg, .jpeg, .png" class="form-control m-1" style="width: 240px;border: none;background-color: rgba(255, 255, 255, 0.1);">
                    <button type="submit" class="btn" style="border: none;background-color: #215273;color: #FE5955;font-size: 16pt;;font-weight: 600;margin-top: 12px;margin-left: 190px;">
                        Add Patient
                    </button>
                </form>
            </div> 

            <div style="text-align: center; margin-top: 20px;">
                <a class="btn" href="patients.php" role="button" style="border: 2px solid #215273;background-color: #46A8A9;color: #215273;font-size: large;font-weight: 600;">
                    Return to patients
                </a>
            </div>

        </div>

    </body>
</html>