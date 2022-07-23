<?php 
session_start();
// error_reporting(0);
include '../config.php';

if($_SESSION['role'] != "admin"){
    header('location:../login.php');
}
include "header.php";
include "navbar.php";
?>

<!-- partial -->

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">



        <?php include "visitor.php"; ?>


        <div class="row">
            <div class="col-sm-12 grid-margin-0  grid-margin-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="card-title">Whats HyperSec?</h4>
                            <div>

                            </div>
                        </div>
                        <div class="news-letter-chart-wrap">
                        HyperSec is a website designed specifically and has various types of website application security holes.
                         The main purpose is made HyperSec is an aid for security enthusiasts to hone their skills in perform penetration tests in a 
                         legal environment without violating existing regulations as well help web developers better understand the process of 
                        securing web applications and assist teachers / students in the teaching and learning process of web security in a classroom environment.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<?php include "footer.php"; ?>