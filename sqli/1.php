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

    <title><?php echo $hasil['title'];?> | SQL Injection #x01</title>
    <link href="../css/hacker.css" rel="stylesheet">
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
<?php } ?>
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
                <h1>SQL Injection - Chall #x01</h1>
                <hr>
                <?php
$id = 'sqli';


if( isset( $_GET[ 'submit' ] ) ) {

    $id = $_GET['id'];

$db = new mysqli('localhost', 'root', '', 'hypersec');

if($db->connect_errno > 0){
    die('Nggak bisa konek ke database [' . $db->connect_error . ']');
}

$sql = <<<SQL
    SELECT *
    FROM `anime`
    WHERE `id` = '$id'
SQL;
?>

<table border=0>
 <tr>
    <th> Title </th>
    <th> Release </th>
    <th> Category </th>

<?php

if(!$result = $db->query($sql)){
    die('Ada eror di query [' . $db->error . ']');
}


while($row = $result->fetch_assoc()){
    echo '<tr> <td>'.$row['title'] . '</td> <td>' . $row['release'] . '</td> <td>' . $row['category'] . '</td>';
}

$result->free();
$db->close();



}
?>
                <div class="row ">
                    <div class="col-md-6 d-flex justify-content-center" >
                        <form action="1.php" method="GET">
                        <input type="text" class="form-control mb-3" name="id" >
                    </div>
                </div><br>
                <input type="submit" name="submit" class="btn btn-primary mb-3" value="Submit">
                </form>
            </div>
        </div>


     
        <!-- Typography -->
        <div class="row tall-row">
            <div class="col-lg-12">
                <h3>Clue</h3>
                <hr>
                <center>
                    <h3>Challenge Clue</h3>
                </center>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
                <h2>Change Parameter Id</h2>

            </div>
            <div class="col-md-6">
                <img src="../wibu.gif" alt="gambar anime komputer" width="60%">
                </div>
        </div>
<?php
        $sql = mysqli_query($koneksi, "SELECT * FROM setting");
$no = 1;
while ($hasil = mysqli_fetch_array($sql)) {
  ?>

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