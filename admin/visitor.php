<?php
include '../config.php';
$filetext = "counter.txt";
$counter  = file($filetext);
$visitor  = $counter[0];
$visitor++;
$file     = fopen($filetext,"w");
fwrite($file, $visitor);
fclose($file);



$people = mysqli_query($koneksi,"SELECT * FROM user");
 
$user = mysqli_num_rows($people);
?>

<div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="icon-wrap">
                                            <i class="mdi mdi-folder-outline"></i>
                                        </div>
                                        <div class="flex-right-height">
                                            <p class="font-weight-bold mb-1">Total Challenge</p>
                                            <h2>7</h2>
                                            <!-- <p class="font-weight-medium p-0"><span
                                                    class="text-success mr-2">+1.2%</span><span>Last month</span></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="icon-wrap">
                                            <i class="mdi mdi-clipboard-text"></i>
                                        </div>
                                        <div class="flex-right-height">
                                            <p class="font-weight-bold mb-1">Total Visitor</p>
                                            <h2><?php echo ($visitor);?></h2>
                                            <p class="font-weight-medium p-0"><span class="text-success mr-2">


                                                <!-- </span><span>People</span></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="icon-wrap">
                                            <i class="mdi mdi-file-document"></i>
                                        </div>
                                        <div class="flex-right-height">
                                            <p class="font-weight-bold mb-1">Challenge Maintenance</p>
                                            <h2>0</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="icon-wrap">
                                            <i class="mdi mdi-account-outline"></i>
                                        </div>
                                        <div class="flex-right-height">
                                        <p class="font-weight-bold mb-1">Total Users</p>
                                            <h2><?php echo ($user);?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>