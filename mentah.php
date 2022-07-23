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
    </style>
</head>

<body>

    <!-- <a href="https://github.com/Bachittarjeet/Hacker-Bootstrap-Template/"><img style="position: absolute; top: 0; left: 0; border: 0;z-index:1001;" src="img/fork.png" alt="Fork me on GitHub"></a> -->

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
                <a class="navbar-brand" href="#">HyperSec </a>
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
            <h2>What is cross-site scripting (XSS)?</h2>
            <p>Cross-site scripting (also known as XSS) is a web security vulnerability that allows 
                an attacker to compromise the interactions that users have with a vulnerable application </p>
           
        </div>

        <!-- Typography -->
        <div class="row tall-row">
            <div class="col-lg-12">
                <h1>Challenge - XSS</h1>
                <hr>
                <center>
                    <h3>Challenge Features</h3>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-primary">- Brow</h2>
                <h2 class="text-primary">- Command Injection</h2>
                <h2 class="text-primary">- Local File Inclusion</h2>
            </div>
            <div class="col-md-6">
                <h2 class="text-primary">- XSS</h2>
                <h2 class="text-primary">- SQL Injection</h2>
                <h2 class="text-primary">- File Upload</h2>
                <h2 class="text-primary">- Cors</h2>
            </div>
        </div>



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

    <!-- Github stars script -->
    <script>
    $(document).ready(function() {
        $.getJSON("https://api.github.com/repos/Bachittarjeet/Hacker-Bootstrap-Template/", function(data) {
            var stars = data['stargazers_count'];
            $("#stars").text(stars + " stars");
        });
    });
    </script>

</body>

</html>