<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=devicen-width, initial-scale=1.0">
  <title>Login - Student Archiving System</title>
  <link rel="icon" type="image/x-icon" href="assets/euC.png">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!--<link rel="stylesheet" href="customcolors.css"/>-->
  <link rel="stylesheet" href="new_login.css" />
  <link rel="stylesheet" href="effects.css" />
  <link rel="stylesheet" href="appearance.css" />

  <nav class="navbar fixed-top navbar-expand navbar-dark p-3" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));;">
    <!-- Navbar content -->
    <a href="https://mseuf.edu.ph/candelaria"><img class="mx-3" src="assets/euC.png" alt="hugenerd" width="30" height="30"></a>
    <ul class="navbar-nav nav-pills mr-auto">

    </ul>
  </nav>

</head>

<body>

  <div class="bg">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="shadow-lg p-3 mb-4 rounded position-absolute" id="login_shape1">
        <h3>Login User</h3>
        <p>Enter your username and password to login.</p>
        <p>No account? <a href="registration.php" class="no-underline hyperlink-color-red">Register</a> here.</p>
        <p>E-mail:</p>
        <form class="form-inline my-2 my-lg-0" action="login.php" method="POST" autocomplete="">
          <input class="form-control w-75" name="email" id="email" type="email" placeholder="E-mail" aria-label="email" required value="<?php echo $email ?>">
          <br>
          <p>Password:</p>
          <input class="form-control w-75" name="password" id="password" type="password" placeholder="Password" aria-label="password" required>

          <br>
          <!--p class="text-danger" id="err"></p>-->
          <?php
          if (count($errors) > 0) {
          ?>
            <p class="text-danger"><?php
                                    foreach ($errors as $showerror) {
                                      echo $showerror;
                                    }
                                    ?></p>
          <?php
          }
          ?>

          <div class="row">
            <div class="col-md-6">
              <input class="form-control button btn btn-secondary" type="submit" name="login" value="Login">
            </div>
            <div class="col-md-6">
              <button class="btn btn-secondary" name="btn_fpassword" id="btn_fpassword" onclick="window.location.href='forgotpassword.php'">Forgot Password</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>