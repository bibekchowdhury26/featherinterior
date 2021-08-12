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

                    <?php if ($layout == 0) : ?>
                    <!-- View Page-->
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-sm-4 col-3">
                            <h4 class="h3 mb-2 text-gray-800">Teams</h4>
                        </div>
                        <div class="col-sm-8 col-9 text-right m-b-20">
                            <a href="<?php echo site_url('Admin/addTeams') ?>"
                                class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add
                                Teams</a>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Team Name</th>
                                            <th>Qualification</th>
                                            <th>Facebook</th>
                                            <th>Instagram</th>
                                            <th>Twitter</th>
                                            <th>linkedin</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Team Name</th>
                                            <th>Qualification</th>
                                            <th>Facebook</th>
                                            <th>Instagram</th>
                                            <th>Twitter</th>
                                            <th>linkedin</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($teams as $x) : ?>
                                        <tr>
                                            <td class="text-center"><img width="130" height="120"
                                                    src="<?php echo base_url() . $x['pro_pic'] ?>"></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['name'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['qualification'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['facebook_link'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['instagram_link'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['twitter_link'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <?php echo $x['linkedin_link'] ?></td>
                                            <td class="text-center" style="vertical-align: middle;"><a
                                                    class="btn btn-primary btn-rounded"
                                                    href="<?php echo site_url('Admin/editTeams/' . $x['id']) ?>"><i
                                                        class="fas fa-pencil-alt m-r-5"></i></a></td>
                                            <td class="text-center" style="vertical-align: middle;"><a
                                                    class="btn btn-danger btn-rounded"
                                                    href="<?php echo site_url('Admin/delTeams/' . $x['id']) ?>"
                                                    onclick="return confirm('Are you sure, you want to delete it?')"><i
                                                        class="fas fa-trash m-r-5"></i></a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php elseif ($layout == 1) : ?>
                    <!-- Add Page -->
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 pt-5">
                            <h4 class="page-title">Add Team</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 pt-3">
                            <form action="<?php echo site_url('Admin/addTeams') ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Profile Picture:</label>
                                            <div class="profile-upload">
                                                <div class="upload-img">
                                                    <img alt="" id="prevpic"
                                                        style="height: 155px; width: 125px; margin-bottom: 5px ">
                                                </div>
                                                <div class="upload-input">
                                                    <input type="file" class="form-control col-sm-6" id="propic"
                                                        name="picture">
                                                    <span class="text-danger"><?php if (isset($error)) {
                                                                                        echo $error;
                                                                                    } ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Name: <span class="text-danger">*</span></label>
                                            <input class="form-control" name="name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Qualification: <span class="text-danger">*</span></label>
                                            <input class="form-control" name="qualification" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Facebook Link:</label>
                                            <input class="form-control" name="facebook_link" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Instagram Link:</label>
                                            <input class="form-control" name="instagram_link" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Twitter Link:</label>
                                            <input class="form-control" name="twitter_link" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Linkedin Link:</label>
                                            <input class="form-control" name="linkedin_link" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button type="submit" class="btn btn-primary submit-btn"
                                        style="margin-bottom: 15px;">Add Team</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php elseif ($layout == 2) : ?>
                    <!-- Edit Page -->
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 pt-5">
                            <h4 class="page-title">Edit Team</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 pt-3">
                            <form action="<?php echo site_url('Admin/editTeams') ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Profile Picture:</label>
                                            <div class="profile-upload">
                                                <div class="upload-img">
                                                    <img id="prevpic"
                                                        style="height: 155px; width: 125px; margin-bottom: 5px "
                                                        src="<?php echo base_url() . $team[0]['pro_pic'] ?>">
                                                </div>
                                                <div class="upload-input">
                                                    <input type="file" class="form-control col-sm-6" id="propic"
                                                        name="picture">
                                                    <span class="text-danger"><?php if (isset($error)) {
                                                                                        echo $error;
                                                                                    } ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Name: <span class="text-danger">*</span></label>
                                            <input class="form-control" name="name" type="text"
                                                value="<?php echo $team[0]['name'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Qualification: <span class="text-danger">*</span></label>
                                            <input class="form-control" name="qualification" type="text"
                                                value="<?php echo $team[0]['qualification'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Facebook Link:</label>
                                            <input class="form-control" name="facebook_link" type="text"
                                                value="<?php echo $team[0]['facebook_link'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Instagram Link:</label>
                                            <input class="form-control" name="instagram_link" type="text"
                                                value="<?php echo $team[0]['instagram_link'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Twitter Link:</label>
                                            <input class="form-control" name="twitter_link" type="text"
                                                value="<?php echo $team[0]['twitter_link'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-2">
                                        <div class="form-group">
                                            <label>Linkedin Link:</label>
                                            <input class="form-control" name="linkedin_link" type="text"
                                                value="<?php echo $team[0]['linkedin_link'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 pt-2" style="display: none;">
                                    <div class="form-group">
                                        <label>ID: <span class="text-danger"></span></label>
                                        <input class="form-control" name="id" type="text"
                                            value="<?php echo $team[0]['id']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button type="submit" class="btn btn-primary submit-btn"
                                        style="margin-bottom: 15px;">Update Team</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php endif; ?>

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
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#prevpic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#propic").change(function() {
        readURL(this);
    });
    </script>
</body>

</html>