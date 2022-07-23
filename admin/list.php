<?php
session_start();
if($_SESSION['role'] != "admin"){
    header('location:../login.php');
}
include "header.php";
include "navbar.php";
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <?php
  include "../config.php";
  $sql = mysqli_query($koneksi, "SELECT * FROM user");
  $no = 1;
  while ($hasil = mysqli_fetch_array($sql)) {
    ?>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <a href="view.php?id=<?php echo $hasil['id']?>">
                                <img src="gambar/<?php echo $hasil['img'];?>" class="img-lg rounded"
                                    alt="profile image" /></a>
                            <div class="ml-3">
                                <a href="view.php?id=<?php echo $hasil['id']?>" style="text-decoration:none;">
                                    <h6><?php echo $hasil['nama']; ?></h6>
                                </a>
                                <!-- <p class="text-muted"><?php echo $hasil['email']; ?></p> -->
                                <p class="mt-2 text-success font-weight-bold"><?php echo $hasil['role']; ?></p>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <a class="btn btn-outline-info btn-sm " href="edit.php?id=<?php echo $hasil['id'] ?>">Edit</a>
                                        
                                    
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a class="btn btn-outline-danger btn-sm ml-2" href="deluser.php?id=<?php echo $hasil['id'] ?>">  Delete</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

            <?php include "footer.php"; ?>