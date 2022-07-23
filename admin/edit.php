<?php
session_start();
include "header.php";
include "navbar.php";
include "../config.php";
$ambil = $koneksi->query("SELECT * FROM user WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$id = $_GET['id'];
if (isset($_GET['id'])) { 
$sql = "SELECT * FROM user WHERE id = '$id' ";
$query = mysqli_query($koneksi, $sql);
while ($res=mysqli_fetch_array($query)) { ?>
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
                                <input type="text" class="form-control" placeholder="<?php echo $res['nama']; ?>"
                                    value="<?php echo $res['nama']; ?>" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Username</label>
                                <input type="text" class="form-control" placeholder="<?php echo $res['username']; ?>"
                                    value="<?php echo $res['username']; ?>" name="username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" placeholder="<?php echo $res['email']; ?>"
                                    value="<?php echo $res['email']; ?>" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Password</label>
                                <input type="password" class="form-control" placeholder="Password"
                                    value="<?php echo $res['password']; ?>" name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Gender</label>
                                <select name="kelamin" class="form-control" value="<?php echo $res['kelamin']; ?>">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="file" name="gambar" class="file-upload-info form-control" value="<?php echo $res['img']; ?>">
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
                                <input type="text" class="form-control" id="exampleInputCity1"
                                    placeholder="<?php echo $res['organisasi']; ?>"
                                    value="<?php echo $res['organisasi']; ?>" name="organisasi">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Bio</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="bio"
                                    placeholder="<?php echo $res['bio']; ?>"
                                    value="<?php echo $res['bio']; ?>"><?php echo $res['bio']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Role</label>
                                <select name="role" class="form-control" value="<?php echo $res['role']; ?>">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                        <?php
} }
include('../config.php');
if (isset($_POST['edit'])){
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

  
  if (empty($gambar)){
    //   if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

    //       move_uploaded_file($file_tmp, 'gambar/'.$gambar);

    //       $koneksi->query("UPDATE  user SET img='default.png',username='$username',nama='$nama',email='$email',password='$password',kelamin='$kelamin',bio='$bio',organisasi='$organisasi',role='$role' WHERE id='$id'");
          
    //     }else {
    //         $koneksi->query("UPDATE  user SET img='$gambar',username='$username',nama='$nama',email='$email',password='$password',kelamin='$kelamin',bio='$bio',organisasi='$organisasi',role='$role' WHERE id='$id'");
    //     }
    //     echo "<script>location='list.php?edit=berhasil'</script>";
    $koneksi->query("UPDATE  user SET img='default.png',username='$username',nama='$nama',email='$email',password='$password',kelamin='$kelamin',bio='$bio',organisasi='$organisasi',role='$role' WHERE id='$id'");
    echo "<script>location='list.php?edit=berhasil'</script>";
    }
    $koneksi->query("UPDATE  user SET img='$gambar',username='$username',nama='$nama',email='$email',password='$password',kelamin='$kelamin',bio='$bio',organisasi='$organisasi',role='$role' WHERE id='$id'");
    echo "<script>location='list.php?edit=berhasil'</script>";
        // }
        }

?>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>