<?php
session_start();
include_once('config.php');
if (!$_SESSION) {
    header("Location:login.php");
    exit();
}
$sql = mysqli_query($koneksi, "SELECT * FROM setting");
$no = 1;
while ($hasil = mysqli_fetch_array($sql)) {
  ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $hasil['title'];?></title>
    <link href="css/hacker.css" rel="stylesheet">
    <link rel="shortcut icon" href="gambar/<?php echo $hasil['img'];?>" />

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
                <?php 
                if($_SESSION['role'] != "admin"){ ?>
                <a class="navbar-brand" href="index.php">HyperSec </a>
               <?php }else { ?>
                <a class="navbar-brand" href="index.php">HyperSec </a>
                <a class="navbar-brand">| </a>
                    <a class="navbar-brand" href="admin/index.php">Admin Dashboard</a>

                <?php
               }
                ?>
                
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">CLICK ME!!!<span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>/brow">Brow</a></li>
                            <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>/ci">Command Injection</a></li>
                            <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>/lfi">Local File Inclusion</a></li>
                            <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>/xss">XSS</a></li>
                            <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>/sqli">SQL Injection</a></li>
                            <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>/fileupload">File Upload</a></li>
                            <li><a href="<?php echo $_SERVER['REQUEST_URI']; ?>/cors">Cors</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">About</li>
                            <li><a href="#">Me</a></li>
                            <li class="dropdown-header">Version x01</li>
                            <!-- <li><a href="#">Version x01</a></li> -->
                        </ul>
                    </li>
                    <a class="navbar-brand" href="logout.php">Log Out </a>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>HyperSec</h1>
            <p>Welcome hackers! Prove the world that a computer genius with a laptop is not a nerd sitting in the corner
                of a untidy
                room but a fun loving work of brilliance! Join our in HyperSec and expand your knowledge about computer
                forensics. </p>
            <p>
                <a class="btn btn-lg btn-primary mb-3" href="#"
                    role="button">Lets Start</a>
            </p>
        </div>

        <!-- Typography -->
        <div class="row tall-row">
            <div class="col-lg-12">
                <h1>Challenge</h1>
                <hr>
                <center>
                    <h3>Challenge Features</h3>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-primary"><a href="brow" style="text-decoration:none;">- Brow</a></h2>
                <h2 class="text-primary"><a href="ci" style="text-decoration:none;">- Command Injection</a></h2>
                <h2 class="text-primary"><a href="lfi" style="text-decoration:none;">- Local File Inclusion</a></h2>
            </div>
            <div class="col-md-6">
                <h2 class="text-primary"><a href="xss" style="text-decoration:none;">- XSS</a></h2>
                <h2 class="text-primary"><a href="sqli" style="text-decoration:none;">- SQL Injection</a></h2>
                <h2 class="text-primary"><a href="fileupload" style="text-decoration:none;">- File Upload</a></h2>
                <h2 class="text-primary"><a href="cors" style="text-decoration:none;">- Cors</a></h2>
            </div>
        </div>



        <div class="row tall-row">
            <div class="col-md-12">
                <p>Created by <a href="//lolic0d3.github.io"><?php echo $hasil['footer'];?></a>. &copy; <script>
                    document.write(new Date().getFullYear())
                    </script>
                </p>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



</body>
<?php } ?>
</html>