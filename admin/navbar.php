<?php
  include "../config.php";
  $sql = mysqli_query($koneksi, "SELECT * FROM setting");
  $no = 1;
  while ($hasil = mysqli_fetch_array($sql)) {
    ?>
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="navbar-brand brand-logo-mini" href="index.php"><img src="gambar/<?php echo $hasil['img'];?> " width="30%"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo" href="index.php"><img src="gambar/<?php echo $hasil['img'];?>" width="30%" alt="logo" /></a>
                <h2 class="navbar-brand brand-logo"><?php echo $hasil['menu'];?></h2>
            </li>
            <li class="nav-item">
                <div class="menu-heading mt-0">MAIN MENU</div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="mdi mdi-locker-multiple menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="pages/widgets/widgets.html">
                    <i class="mdi mdi-airplay menu-icon"></i>
                    <span class="menu-title">Widgets</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
                    <i class="mdi mdi-television menu-icon"></i>
                    <span class="menu-title">Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="apps">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="add.php">Add Users</a></li>
                        <li class="nav-item"> <a class="nav-link" href="list.php">List Users</a>
                    </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#sett" aria-expanded="false" aria-controls="apps">
                    <i class="mdi mdi-television menu-icon"></i>
                    <span class="menu-title">Features</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="sett">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="setting.php">Website Setting</a></li>
                        <!-- <li class="nav-item"> <a class="nav-link" href="pages/apps/calendar.html">List Users</a> -->
                    </li>
                    
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../logout.php">
                <i class="mdi mdi-airplay menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../">
                <i class="mdi mdi-airplay menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>

        </ul>
    </nav>
    <?php } ?>