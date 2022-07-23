<?php
session_start();
if($_SESSION['role'] != "admin"){
    header('location:../login.php');
}
include "header.php";
include "navbar.php";
?>
<!-- partial -->
<?php
  include "../config.php";
  $sql = mysqli_query($koneksi, "SELECT * FROM setting");
  $no = 1;
  while ($hasil = mysqli_fetch_array($sql)) {
    ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Website Setting</h4>

                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Title Site</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" value="<?php echo $hasil['title'];?>"
                                    name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Footer</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Footer" value="<?php echo $hasil['footer'];?>"
                                    name="footer">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Menu</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Menu" value="<?php echo $hasil['menu'];?>"
                                    name="menu">
                            </div>

                            <div class="form-group">
                                <input type="file" name="gambar" class="file-upload-info form-control" id="" value="<?php echo $hasil['img'];?>">
                            </div>

                            <!-- <div class="form-group">
                      <label  for="exampleSelectGender">Role</label>
                        <select name="role" class="form-control" id="exampleSelectGender">
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                        </select>
                      </div> -->
                            <button type="submit" name="set" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                        <?php
include('../config.php');
if (isset($_POST['set'])){
  $title = $_POST['title'];
  $footer = $_POST['footer'];
  $menu = $_POST['menu'];


  $ekstensi_diperbolehkan	= array('png','jpg','gif','PNG','jpeg');
  $gambar = $_FILES['gambar']['name'];
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];

  if (!empty($gambar)){
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

          move_uploaded_file($file_tmp, 'gambar/'.$gambar);

          $koneksi->query("UPDATE  setting SET img='default.png',title='$title',footer='$footer',menu='$menu'");
          echo "<script>location='setting.php?berhasil'</script>";
        }
        $koneksi->query("UPDATE  setting SET img='$gambar',title='$title',footer='$footer',menu='$menu'");
          echo "<script>location='setting.php?berhasil'</script>";
            
        }
        }

?>
                    </div>
                </div>
            </div>
        </div>
        <?php } include "footer.php"; ?>