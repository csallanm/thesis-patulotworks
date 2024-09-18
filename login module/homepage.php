<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM tblusers WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: resetcode.php');
            }
        }else{
            header('Location: userotp.php');
        }
    }
}else{
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Student Archiving System</title>
    <link rel="icon" type="image/x-icon" href="assets/euC.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="customcolors.css"/>

    <nav class="navbar fixed-top navbar-expand navbar-dark shadow-lg p-3" style="background-color: #4e0000;">
      <!-- Navbar content -->
      <img class="mx-3" src="euC.png" alt="hugenerd" width="30" height="30">
      <ul class="navbar-nav nav-pills mr-auto">
        <li class="nav-item">
          <a class="nav-link active mx-2" href="homepage.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="students.html">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="https://mseuf.edu.ph/candelaria/">MSEUF-CI Website</a>
        </li>
      </ul>
        <div class="dropdown-pr4 ms-auto">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle mx-3" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/assets/user-icon-2048x2048-ihoxz4vq.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
            <span class="d-none d-sm-inline mx-2" style="text-decoration: none; color: white;"><?php echo $fetch_info['name']?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-small shadow" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="helpdesk.html">Help Desk</a></li>
          <li><a class="dropdown-item" href="#">About</a></li>
          <li>
              <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
      </ul>
        </div>
      
    </nav>
</head>
<body>
  

  <div class="container-fluid">
    <h1>Welcome User!</h1>
  </div>

  <div class="container-fluid m-3">
        <p><img src ="assets/help_48dp_FILL0_wght400_GRAD0_opsz48.svg" id="imgsize1">
          Need help using it? Click <a href="#" style="text-decoration: none">HELP</a>!
          
        </p>
  </div>
    
  </div>
  
  <div class="container" id="con1">
    <div class="shadow-lg p-3 mb-4 rounded position-absolute" id="shape1">
      <h4>Did you know?</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, velit porro odio accusamus laudantium minus adipisci voluptates, consequuntur perferendis libero iusto enim vero laborum veritatis aut, illum magnam necessitatibus corporis? Cum illo repellat deserunt esse eos itaque dolores nesciunt eius corrupti earum incidunt pariatur explicabo dolorem ipsa debitis, beatae quod.</p>
  </div>
  </div>

  <div class="container" id="con2">
    <div class="shadow-lg p-3 mb-4 rounded position-absolute" id="shape2">
      <h4>Population</h4>
      <div class="row">
        <div class="col">
          <h5>0</h5>
          <p>College students enrolled</p>
        </div>
      </div>

      <h4>Course Population</h4>
      <div class="row">
          <div class="col">
            <h5>0</h5>
            <p><b>BSA</b> students enrolled</p>
          </div>
          <div class="col">
            <h5>0</h5>
            <p><b>BSHM</b> students enrolled</p>
          </div>
      </div>

      <div class="row">
        <div class="col">
          <h5>0</h5>
          <p><b>BSBA</b> students enrolled</p>
        </div>
        <div class="col">
          <h5>0</h5>
          <p><b>BSN</b> students enrolled</p>
        </div>
      </div>

    <div class="row">
      <div class="col">
        <h5>0</h5>
        <p><b>BSCoE</b> students enrolled</p>
      </div>
      <div class="col">
        <h5>0</h5>
        <p><b>ABPsych</b> students enrolled</p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h5>0</h5>
        <p><b>BSCS & ACS</b> students enrolled</p>
      </div>
      <div class="col">
        <h5>0</h5>
        <p><b>BSTM</b> students enrolled</p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h5>0</h5>
        <p><b>BEEd & BSEd</b> students enrolled</p>
      </div>
    </div>
  </div>
  </div>
  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
