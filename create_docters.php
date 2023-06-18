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

    <body style="background-color: #ECFFFD;">
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

        <!-- <img src="img\update_docter.png" alt="image of patern" style="height: 600px;"> -->

        <div style="text-align: center; margin-top:">
            <h1 style="color: #215273; font-size: 40pt; font-weight: 400;">Add Docter</h1>
        </div>

        <div style="width: 320px;height 300px;background-color: white;border: 2px solid black;">
            <form class="form-inline m-2" action="create.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" class="form-control m-1" id="name" name="name" style="width: 240px;">
                <label for="score">Surname:</label>
                <input type="text" class="form-control m-1" id="surname" name="surname" style="width: 240px;">
                <label for="score">Age:</label>
                <input type="number" class="form-control m-1" id="age" name="age" style="width: 240px;">
                <label for="score">Gender:</label>
                <input type="text" class="form-control m-1" id="gender" name="gender" style="width: 240px;">
                <label for="score">Email:</label>
                <input type="text" class="form-control m-1" id="email" name="email" style="width: 240px;">
                <label for="score">Password:</label>
                <input type="text" class="form-control m-1" id="password" name="password" style="width: 240px;">
                <label for="score">Phone Number:</label>
                <input type="number" class="form-control m-1" id="phonenumber" name="phonenumber" style="width: 240px;">
                <label for="score">Specialisation:</label>
                <input type="text" class="form-control m-1" id="specialisation" name="specialisation" style="width: 240px;">
                <label for="score">Room Number:</label>
                <input type="text" class="form-control m-1" id="roomnumber" name="roomnumber" style="width: 240px;">
                <label for="score">Profile Picture:</label>
                <input type="file" name="image" id ="image" accept=".jpg, .jpeg, .png" class="form-control m-2">
                <button type="submit" class="btn" style="border: none;background-color: #215273;color: #FE5955;font-size: large;font-weight: 600;">
                    Add Docter
                </button>
            </form>
         </div>

         <div style="text-align: center;">
            <a class="btn" href="docters.php" role="button" style="border: none;background-color: #46A8A9;color: #215273;font-size: large;font-weight: 600;">Return to Docters</a>
        </div>

        

    </body>
</html>