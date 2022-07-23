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

    <title><?php echo $hasil['title'];?> | FIleUpload #x02</title>
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
                <h1>FileUpload - Chall #x02</h1>
                <hr>

                <div class="row ">
                    <div class="col-md-6 d-flex justify-content-center" >
                        <form action="2.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                        <input type="file" class="form-control mb-3" name="uploaded" >
                    </div>
                </div><br>
                <input type="submit" name="upload" class="btn btn-primary mb-3" value="Upload">
                </form>
            </div>
        </div>


        <?php

if( isset( $_POST[ 'upload' ] ) ) {
	
	$target_path  = "uploads/";
	$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );


	$uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
	$uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1);
	$uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];
	$uploaded_tmp  = $_FILES[ 'uploaded' ][ 'tmp_name' ];

	
	if( ( strtolower( $uploaded_ext ) == "jpg" || strtolower( $uploaded_ext ) == "jpeg" || strtolower( $uploaded_ext ) == "png" ) &&
		( $uploaded_size < 100000 ) &&
		getimagesize( $uploaded_tmp ) ) {

		if( !move_uploaded_file( $uploaded_tmp, $target_path ) ) {
		
			echo '<pre>Gambarmu gagal di upload.</pre>';
		}
		else {
			
			echo "<pre>{$target_path} Sukses Upload Gambar!</pre>";
		}
	}
	else {
		
		echo '<pre>Sori gambar yang kamu pilih tidak di upload. Kamu upload jenis file yang salah (hanya JPEG dan PNG yang di perbolehkan)</pre>';
	}
}
?>
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
                <h2>Bypass Extension 2</h2>

            </div>
            <div class="col-md-6">
                <img src="../wibu.gif" alt="gambar anime komputer" width="60%">
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