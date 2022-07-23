<?php
session_start();
// Include database connection file
include_once('config.php');
if (isset($_SESSION['ID'])) {
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HyperSec</title>
    <link href="css/hacker.css" rel="stylesheet">
    

    <style>
    .tall-row {
        margin-top: 40px;
    }

    .modal {
        position: relative;
        top: auto;
        right: auto;
        left: auto;
        bottom: auto;
        z-index: 1;
        display: block;
    }
    img {
  border-radius: 50%;
}

.post-container {
    margin: 20px 20px 0 0;  
    border: 5px solid #333;
    overflow: auto
}
.post-thumb {
    float: left
}
.post-thumb img {
    display: block
}
.post-content {
    margin-left: 210px
}
.post-title {
    font-weight: bold;
    font-size: 200%
}
    </style>
</head>

<body>


    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HyperSec </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">CLICK ME!!!<span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Brow</a></li>
                            <li><a href="#">Command Injection</a></li>
                            <li><a href="#">Local File Inclusion</a></li>
                            <li><a href="#">XSS</a></li>
                            <li><a href="#">SQL Injection</a></li>
                            <li><a href="#">File Upload</a></li>
                            <li><a href="#">Cors</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">About</li>
                            <li><a href="#">Me</a></li>
                            <li class="dropdown-header">Version x01</li>
                        </ul>
                    </li> -->
                    <a class="navbar-brand" href="login.php">Login </a>
                        

                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron">
            <center><h2>Register</h2></center>
            
            <div class="post-thumb"><img src="wibu.gif" alt="Cinque Terre" width="130px"> </div><br><br>
            <div class="post-content"><p>Don't worry we won't steal your password :D</p><br><br><br></div>
            <p>
            <?php if (isset($errorMsg)) { ?>
            <p><?php echo $errorMsg; ?></p>

        <?php } ?>
                <form action="" method="POST">
                <label for="">Username</label>
                <input type="text" class="form-control mb-3" name="username" id=""> <br>
                <label for="">Email</label>
                <input type="email" class="form-control mb-3" name="email" id=""><br>
                <label for="">Password</label>
                <input type="text" class="form-control mb-3" name="password" id=""><br>
                <input type="hidden" class="form-control mb-3" name="role" value="user" id=""> <br>
                <center><input type="submit" class="btn btn-primary" name="submit" value="Lets Start"></center>
                </form>
            </p>
        </div>

        
        

        <?php
  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location:index.php");
      exit();
  }
  // Include database connectivity
    
  include_once('config.php');
  
  if (isset($_POST['submit'])) {
    
    $username = $koneksi->real_escape_string($_POST['username']);
    $password = $koneksi->real_escape_string(($_POST['password']));
    $email     = $koneksi->real_escape_string($_POST['email']);
    $role     = $koneksi->real_escape_string($_POST['role']);
    $query  = "INSERT INTO user (username,email,password,role) VALUES ('$username','$email','$password','$role')";
    $result = $koneksi->query($query);
    if ($result==true) {
      header("Location:login.php");
      die();
    }else{
      $errorMsg  = "You are not Registred..Please Try again";
    }   
  }

?>
        <div class="row tall-row">
            <div class="col-md-12">
                <p>Created by <a href="//lolic0d3.github.io">Ali Akbar</a>. &copy; <script>
                    document.write(new Date().getFullYear())
                    </script>
                </p>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



</body>

</html>