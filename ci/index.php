<?php
session_start();
include_once('../config.php');
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

    <title><?php echo $hasil['title'];?> | Command Injection</title>
    <link href="../css/hacker.css" rel="stylesheet">

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
                <a class="navbar-brand" href="../index.php">HyperSec </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
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
                            <!-- <li><a href="#">Version x01</a></li> -->
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron">
            <h2>What is Command Injection (CI)?</h2>
            <p>Command Injection (also known as shell injection) is a web security vulnerability that allows an attacker 
                to execute arbitrary operating system (OS) commands on the server that is running an application </p>
           
        </div>

        <!-- Typography -->
        <div class="row tall-row">
            <div class="col-lg-12">
                <h1>Challenge - Command Injection</h1>
                <hr>
                <center>
                    <h3>Challenge List</h3>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-primary"><a href="1.php" style="text-decoration:none;">- GET Method</a></h2>
                <h2 class="text-primary"><a href="2.php" style="text-decoration:none;">- POST Method</a></h2>
                <h2 class="text-primary"><a href="3.php" style="text-decoration:none;">- Whois</a></h2>
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

</html>
<?php } ?>