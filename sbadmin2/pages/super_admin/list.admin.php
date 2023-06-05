<!DOCTYPE html>
<html lang="en">
<title>Administrator Lists | SFAC GCS</title>

<!DOCTYPE html>
<html lang="en">

<?php include "../../includes/header.php"; ?>

<body id="page-top">

    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "../../includes/sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar / Navbar -->
                <?php include "../../includes/navbar.php"; ?>
                <!-- End of Topbar Topbar / Navbar  -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Administrator Lists</h1>                           
                        </div>
                    
                    <!-- Content Row -->
                    <div class="row">
                    <div class="card-body  pb-2">
                                    <div class="table-responsive p-0 mx-3">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr class="light">
                                                    <th>Image</th>
                                                    <th>Fullname</th>
                                                    <th>Email</th>
                                                    <th>Username</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $get_user = mysqli_query($conn, "SELECT *, CONCAT(tbl_admins.lastname, ', ', tbl_admins.firstname) AS fullname FROM tbl_admins");
                                                while ($row = mysqli_fetch_array($get_user)) {
                                                    $id = $row['admin_id'];
                                                ?>
                                                    <tr>
                                                        <td><img class="img-fluid mr-4" src="data:image/jpeg;base64, <?php echo base64_encode($row['admin_image']); ?>" alt="image" style="height: 100px; width: 100px"></td>
                                                        <td><?php echo $row['fullname'] ?></td>
                                                        <td><?php echo $row['email'] ?></td>
                                                        <td><?php echo $row['username'] ?></td>
                                                        <td>
                                                            <a href="edit.admin.php<?php echo '?admin_id=' . $id; ?>" type="button" class="btn btn-info mx-1">
                                                                <i class="fa fa-edit"></i> Update
                                                            </a>

                                                            <a class="btn btn-danger" href="userData/user.del.admin.php?admin_id=<?php echo $id; ?>">
                                                            <i class="fa fa-trash"></i> Delete
                                                            </a>

                                                        </td>
                                                    </tr>

                                                    
                                                    
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                                           

                                    </div>
                                </div>
                        
                    </div>

                    <!-- Content Row -->
              
                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "../../includes/footer.php";?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-secondary" href="../login/userData/user.logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>