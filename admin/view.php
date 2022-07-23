<?php
session_start();
if($_SESSION['role'] != "admin"){
    header('location:../login.php');
}
include "../config.php";
$ambil = $koneksi->query("SELECT * FROM user WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
include "header.php";
include "navbar.php";
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
						</div>
						
						
            <?php
		$id = $_GET['id'];
		if (isset($_GET['id'])) { 
		$sql = "SELECT * FROM user WHERE id = '$id' ";
		$query = mysqli_query($koneksi, $sql);
		while ($res=mysqli_fetch_array($query)) { ?>

		<!-- <img src="gambar/<?php echo $res['gambar'];?>" width="200"> -->

    
    <div class="row">
						<div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
							<div class="card">
								<div class="card-body text-center">
                  <div class="mb-12">
                  <img src="gambar/<?php echo $res['img'];?>" class="img-lg rounded" alt="profile image"/></a>
										<h4><?php echo $res['nama']; ?></h4>
										<p class="text-muted mb-0">Role: <?php echo $res['role']; ?></p>
									</div>
									<p class="mt-4 card-text">Bio: </br>
                  <?php echo $res['bio']; ?>
                    </p>
					<a class="btn btn-outline-info btn-sm mt-3 mb-4" href="edit.php?id=<?php echo $res['id'] ?>">Edit</a>
					<a class="btn btn-outline-danger btn-sm mt-3 mb-4" href="deluser.php?id=<?php echo $res['id'] ?>">Delete</a>
                    <div class="border-top pt-3">
                      <div class="row">
											<!-- <div class="col-4">
                        <h6>5896</h6>
												<p>Post</p>
											</div>
											<div class="col-4">
                        <h6>1596</h6>
												<p>Followers</p>
											</div>
											<div class="col-4">
                        <h6>7896</h6>
												<p>Likes</p>
											</div> -->
										</div>
									</div>
								</div>
							</div>
              <?php } } ?>
						</div>
						</div>
						</div>
						
						
            <?php
			
				
			include "footer.php"; ?>
