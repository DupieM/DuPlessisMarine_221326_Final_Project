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

            <img src="img\dv logo.png" alt="Logo" class="logo" style="margin-bottom: 620px;margin-left: 305px;">

            <img src="img\login.png" alt="image of patern" style="height: 795.5px;margin-left: 815.5px;margin-top: -777px;">

            <div style="margin-top: -610px;margin-left: 200px;">
                <h1 style="font-weight: bold; font-size: 35pt;text-decoration: underline;color: #215273;">Log In</h1>
                <form class="form-inline m-2" style="width: 400px;" action="login_code.php">
                    <label for="name" style="font-weight: bold; font-size: 20pt;color: #215273;">Email:</label>
                    <input type="text" class="form-control m-2" id="name" name="signin_email" style="width: 340px;color: #215273;border: 2px solid #215273;">
                    <label for="password" style="font-weight: bold; font-size: 20pt;color: #215273;">Password:</label>
                    <input type="text" class="form-control m-2" id="name" name="signin_pass" style="width: 340px;color: #215273;border: 2px solid #215273;">
                    <h6 style="width: 340px;color: #215273;">Forgot Password?</h6>
                    <h5 style="width: 340px;color: #215273;">------------------ OR -------------------</h5>
                    <a href="register.php"><h4 style="width: 340px;text-decoration: underline;text-align: center;color: #215273;">Sign Up</h4></a>
                    <button type="Submit" class="btn" style="border: none;background-color: #215273;color: #FE5955;font-size: 20pt;margin-top: 12px;margin-left: 105px;font-weight: bold;">
                        Proceed
                    </button>

                        <!-- Display error messages -->
                        <?php
                            if (isset($_GET['error'])) { ?>

                            <p style="color: #FE5955;font-size: 25pt;margin-top: 10px;width: 350px;text-align: center;">
                                <?php echo $_GET['error']; ?>
                            </p>

                        <?php } ?>
                    
                    
                    

                </form>
            </div>
    
            
            
        </div>
        

    </body>
</html>