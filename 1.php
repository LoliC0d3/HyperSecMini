<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HyperSec</title>
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


        <div class="row tall-row">
            <div class="col-lg-12">
                <h1>XSS - Chall #x01</h1>
                <hr>

                <div class="row ">
                    <div class="col-md-6 d-flex justify-content-center" >
                        <input type="text" class="form-control mb-3" name="" id="">
                    </div>
                </div><br>
                <input type="sumbit" class="btn btn-primary mb-3" value="Submit">
            </div>
        </div>

        
        <!-- Typography -->
        <div class="row tall-row">
            <div class="col-lg-12">
                <h3>Clue</h3>
                <hr>
                <center>
                    <h3>Challenge Features</h3>
                </center>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
                <h2>Emphasis classes</h2>
                <p class="text-primary">You put the emPHAsis on the wrong syLLAbles.</p>
                <p class="text-warning">Has Anyone Really Been Far Even as Decided to Use Even Go Want to do Look More Like?</p>
                <p class="text-danger">If the answer to all questions is yes, so why not?</p>
                <p class="text-success">And when everyone is super, no one will be.</p>
                <p class="text-info">The force will be with you, always.</p>
            </div>
            <div class="col-md-6">
                <img src="wibu.gif" alt="gambar anime komputer" width="60%">
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



</body>

</html>