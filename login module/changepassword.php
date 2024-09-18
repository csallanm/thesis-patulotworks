<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
if ($email == false) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - Student Archiving System</title>
    <link rel="icon" type="image/x-icon" href="assets/euC.png">
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
                <h3>Change Password</h3>
                <p>Please enter new password.</p>
                <form action="changepassword.php" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="New Password" required>
                        </div>

                        <div class="col-md-6">
                            <label for="password">Confirm Password:</label>
                            <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm New Password" required>
                        </div>
                    </div>
                    <br>
                    <!--<p class="text-danger" id="err"></p>-->
                    <?php
                    if (isset($_SESSION['info'])) {
                    ?>
                        <p class="text-success">
                            <?php echo $_SESSION['info']; ?>
                        </p>
                    <?php
                    }
                    ?>
                    <?php
                    if (count($errors) > 0) {
                    ?>
                        <p class="text-danger">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </p>
                    <?php
                    }
                    ?>

                    <input class="form-control button btn btn-secondary" type="submit" name="change-password" value="Change Password">
            </div>
            </form>
        </div>
    </div>



    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>