<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Student Archiving System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--<link rel="stylesheet" href="customcolors.css"/>-->
    <link rel="stylesheet" href="new_login.css" />
    <link rel="stylesheet" href="effects.css" />
    <link rel="stylesheet" href="appearance.css" />
    <nav class="navbar fixed-top navbar-expand navbar-dark p-3" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));;">
        <!-- Navbar content -->
        <a href="login.php"><img align="left" src="assets/arrow_back_1000dp_FFFFFF_FILL0_wght400_GRAD0_opsz48.svg" style="width: 30px;" class="circular-hover"></a>
        <a href="https://mseuf.edu.ph/candelaria"><img class="mx-3" src="assets/euC.png" alt="hugenerd" width="30" height="30"></a>
        <ul class="navbar-nav nav-pills mr-auto">

        </ul>
    </nav>
</head>

<body>


    <div class="bg">
        <!--code-->
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="shadow-lg p-3 mb-4 rounded position-absolute " id="login_shape1">
                <h3>Staff Account Registration</h3>
                <p>Please enter the required fields to register.</p>
                <form action="registration.php" method="POST" autocomplete="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required value="<?php echo $name ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required value="<?php echo $email ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="col-md-6">
                            <label for="cpassword">Confirm Password:</label>
                            <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <br>
                    <!--<p class="text-danger" id="err"></p>-->

                    <?php
                    if (count($errors) == 1) {
                    ?>
                        <p class="text-danger">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </p>
                    <?php
                    } elseif (count($errors) > 1) {
                    ?>
                        <p class="text-danger">
                            <?php
                            foreach ($errors as $showerror) {
                            ?>
                                <li><?php echo $showerror; ?></li>
                            <?php
                            }
                            ?>
                        </p>
                    <?php
                    }
                    ?>

                    <input class="form-control button btn btn-secondary" type="submit" name="signup" value="Register">
            </div>
        </div>
        </form>
    </div>



    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>