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

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Add Users</h4>
  
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                      <label  for="exampleSelectGender">Gender</label>
                        <select name="kelamin" class="form-control" id="exampleSelectGender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <input type="file" name="gambar" class="file-upload-info form-control" id="">
                      <!-- <label>File upload</label>
                      <input type="file" name="img" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">

                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Organization</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Organization" name="organisasi">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Bio</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="bio"></textarea>
                    </div>
                    <div class="form-group">
                      <label  for="exampleSelectGender">Role</label>
                        <select name="role" class="form-control" id="exampleSelectGender">
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                        </select>
                      </div>
                    <button type="submit" name="add" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <?php
include('../config.php');
if (isset($_POST['add'])){
  $username = $_POST['username'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $kelamin = $_POST['kelamin'];
  $bio = $_POST['bio'];
  $organisasi = $_POST['organisasi'];
  $role = $_POST['role'];

  $ekstensi_diperbolehkan	= array('png','jpg','gif','PNG','jpeg');
  $gambar = $_FILES['gambar']['name'];
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];

  if (!empty($gambar)){
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

          move_uploaded_file($file_tmp, 'gambar/'.$gambar);

          $sql="INSERT INTO user (img,username,nama,email,password,kelamin,bio,organisasi,role) VALUES ('$gambar','$username','$nama','$email','$password','$kelamin','$bio','$organisasi','$role')";
          
          $ambil=mysqli_query($koneksi,$sql);

          if ($ambil) {
            
            echo "<script>location='list.php?add=berhasil'</script>";
          }
          else {
            echo "<script>location='add.php?add=gagal'</script>";
            
          }
          
        }
      }else {
        // $gambar="gambar/default.png";
        $sql="INSERT INTO user (img,username,nama,email,password,kelamin,bio,organisasi,role) VALUES ('default.png','$username','$nama','$email','$password','$kelamin','$bio','$organisasi','$role')";
        $ambil=mysqli_query($koneksi,$sql);

          if ($ambil) {
            
            echo "<script>location='list.php?add=berhasil'</script>";
          }
        echo "<script>location='list.php?add=berhasil'</script>";
  }
  }

?>
                </div>
              </div>
            </div>
            </div>
            <?php include "footer.php"; ?>