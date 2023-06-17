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

        <div style="text-align: center;">
            <h1 style="color: #215273; font-size: 40pt; font-weight: 400;">Add Docter</h1>
        </div>

        <div class="container">
            <form class="form-inline m-2" action="create.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" class="form-control m-2" id="name" name="name">
                <label for="score">Surname:</label>
                <input type="text" class="form-control m-2" id="surname" name="surname">
                <label for="score">Age:</label>
                <input type="number" class="form-control m-2" id="age" name="age">
                <label for="score">Gender:</label>
                <input type="text" class="form-control m-2" id="gender" name="gender">
                <label for="score">Email:</label>
                <input type="text" class="form-control m-2" id="email" name="email">
                <label for="score">Password:</label>
                <input type="text" class="form-control m-2" id="password" name="password">
                <label for="score">Phone Number:</label>
                <input type="number" class="form-control m-2" id="phonenumber" name="phonenumber">
                <label for="score">Specialisation:</label>
                <input type="text" class="form-control m-2" id="specialisation" name="specialisation">
                <label for="score">Room Number:</label>
                <input type="text" class="form-control m-2" id="roomnumber" name="roomnumber">
                <label for="score">Profile Picture:</label>
                <input type="file" name="image" id ="image" accept=".jpg, .jpeg, .png" class="form-control m-2">
                <a class="btn" href="docters.php" role="button" style="border: none;background-color: #215273;color: #FE5955;font-size: large;font-weight: 600;">Add</a>
            </form>
         </div>

    </body>
</html>