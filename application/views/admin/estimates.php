<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li> -->

                        <!-- Begin of Topbar Right Elements -->
                        <?php include("top.php"); ?>
                        <!-- End of Topbar Right Elements-->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- View Page-->
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-sm-4 col-3">
                            <h4 class="h3 mb-2 text-gray-800">Estimate Requests</h4>
                        </div>
                        <!-- <div class="col-sm-8 col-9 text-right m-b-20">
                            <a href="<?php echo site_url('Admin/addConsultation') ?>" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Services</a>
                        </div> -->
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Image</th>
                                            <th>Rooms</th>
                                            <th>Furnitures</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <!-- <th>Edit</th> -->
                                            <!-- <th>Delete</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Image</th>
                                            <th>Rooms</th>
                                            <th>Furnitures</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <!-- <th>Edit</th> -->
                                            <!-- <th>Delete</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $a = 0;
                                        foreach ($estimates as $x) : ?>
                                        <tr>
                                            <td class="text-center" style="vertical-align: middle;"><?php $a++;
                                                                                                        echo $a; ?>
                                            </td>
                                            <td class="text-center"><img width="130" height="120"
                                                    src="<?php echo base_url() . $x['home_plan'] ?>"></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['false_ceiling'].' - False Ceiling<br>'; ?>
                                                <?php echo $x['electric_room'].' - Electric Room<br>'; ?>
                                                <?php echo $x['modular_kitchen'].' - Modular Kitchen<br>'; ?>
                                                <?php echo $x['wall_panel'].' - Wall Panel<br>'; ?>
                                                <?php echo $x['wall_paper'].' - Wall Paper<br>'; ?>
                                                <?php echo $x['wall_paint'].' - Wall Paint<br>'; ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['furnitures'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['name'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['email'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['phone'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['address'] ?></td>
                                            <!-- <td class="text-center" style="vertical-align: middle;"><a class="btn btn-primary btn-rounded" href="<?php echo site_url('Admin/editservices/' . $x['id']) ?>"><i class="fas fa-pencil-alt m-r-5"></i></a></td> -->
                                            <!-- <td class="text-center" style="vertical-align: middle;"><a class="btn btn-danger btn-rounded" href="<?php echo site_url('Admin/delservices/' . $x['id']) ?>" onclick="return confirm('Are you sure, you want to delete it?')"><i class="fas fa-trash m-r-5"></i></a></td> -->
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Logout Modal with Scroll to Top Button -->
    <?php include("logout.php"); ?>
    <!-- End Logout Modal with Scroll to Top Button -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>js/demo/datatables-demo.js"></script>

</body>

</html>