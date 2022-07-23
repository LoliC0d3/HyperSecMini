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
                    <a class="navbar-brand" href="register.php">Register </a>
                        

                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron">
            <center><h2>Login</h2></center>
            
            <div class="post-thumb"><img src="wibu.gif" alt="Cinque Terre" width="130px"> </div>
            <div class="post-content"><p>Welcome hackers! Prove it to the world by solving all of these Challenge that you are not just internet fleas that are just silent in the computer.</p><br><br></div>
            <p>
            <?php if (isset($errorMsg)) { ?>
            <p><?php echo $errorMsg; ?></p>

        <?php } ?>
                <form action="" method="POST">
                <label for="">Username</label>
                <input type="text" class="form-control mb-3" name="username" id=""> <br>
                <label for="">Password</label>
                <input type="password" class="form-control mb-3" name="password" id=""><br>
                <center><input type="submit" class="btn btn-primary" name="submit" value="Lets Start"></center>
                </form>
            </p>
        </div>

        
        

        <?php
session_start();
include_once('config.php');
if (isset($_SESSION['username'])) {
    header("Location:index.php");
    exit();
}

    
  include_once('config.php');
  
  if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($koneksi,$_POST['username']);
    $password = mysqli_real_escape_string($koneksi,($_POST['password']));


$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($sql);

if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	if($data['role']=="admin"){
		$_SESSION['username'] =  $data['username'];
		$_SESSION['role'] = "admin";
		header("location:admin/index.php");

	}else if($data['role']=="user"){
		$_SESSION['username'] = $data['username'];
		$_SESSION['role'] = "user";
		header("location:index.php");

	}else{

		header("location:index.php?alert=gagal");
	}	
}else{
	header("location:index.php?alert=gagal");
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