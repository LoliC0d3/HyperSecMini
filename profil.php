<?php 
session_start();
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
                    <a class="navbar-brand" href="logout.php">Log Out </a>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>HyperSec</h1>
            <div class="post-thumb"><img src="wibu.gif" alt="Cinque Terre" width="130px"> </div>
            <div class="post-content"><p>Welcome hackers! Prove the world that a computer genius with a laptop is not a nerd sitting in the corner
                of a untidy
                room but a fun loving work of brilliance! Join our in HyperSec and expand your knowledge about computer
                forensics. </p></div>
            <p>
                <a class="btn btn-lg btn-primary mb-3" href="#"
                    role="button">Lets Start</a>
            </p>
        </div>

        <!-- Typography -->
        <div class="row tall-row">
            <div class="col-lg-12">
                <h1>Profil</h1>
                <hr>
                <center>
                    <h3>Challenge Features</h3>
                </center>
            </div>
        </div>
        <!-- <div class="row">
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
        </div> -->


        <?php
include "config.php";
$query=mysqli_query($koneksi,"SELECT * FROM user");
			$data=mysqli_fetch_assoc($query);
?>

<!-- <p><?php echo $_SESSION['id']; ?></p> -->
<p><?php echo ucwords($_SESSION['username']); ?></p>
<pre><?php print_r($_SESSION) ?></pre>

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