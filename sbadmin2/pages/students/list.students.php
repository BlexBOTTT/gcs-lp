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

                <!-- Topbar -->
                <?php include "../../includes/navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Student List</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
                        </div>

                        <div class="row justify-content-center">
                                    <div class="col-md-5 mb-3 mt-4">
                                        <form method="GET">
                                            <div class="input-group">
                                                <input type="search" class="form-control"
                                                    placeholder="Search for (Student no. or Name)" name="search">
                                                <div class="input-group-append">
                                                    <button type="submit" name="look" class="btn bg-navy"
                                                        data-toggle="tooltip" data-placement="bottom" title="Search">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Year/Grade Level</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Year/Grade Level</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php
                                            if (isset($_GET['look'])) {

                                                $_GET['search'] = addslashes($_GET['search']);
                                                $_SESSION['search'] = $_GET['search'];

                                                $get_user = mysqli_query($conn, "SELECT *, CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename) AS fullname 
                                                FROM tbl_students
                                                LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                                WHERE (firstname LIKE '%$_GET[search]%' 
                                                OR middlename LIKE '%$_GET[search]%'
                                                OR lastname  LIKE '%$_GET[search]%' 
                                                OR stud_no LIKE '%$_GET[search]%'
                                                OR yearlevel LIKE '%$_GET[search]%')                         
                                                ORDER BY stud_id DESC
                                                ") or die(mysqli_error($conn));
                                                    while ($row = mysqli_fetch_array($get_user)) {
                                                        $id = $row['stud_id'];
                                                        $_SESSION['stud_no'] = $row['stud_no'];

                                                ?>
                                        <tr>
                                            <td><img class="img-fluid mr-4"
                                                            src="data:image/jpeg;base64, <?php echo base64_encode($row['img']); ?>"
                                                            alt="image" style="height: 80px; width: 100px"></td>
                                            <td><?php echo $row['fullname'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['yearlevel'] ?></td>
                                            <td><?php echo $row['username'] ?></td>
                                            <td>
                                                <a href="../forms/guidance.php" type="button" class="btn btn-primary mx-1">
                                                    <i class="fa fa-print"></i> Student Profile
                                                </a>                                   
                                                <br>
                                                <a href="prof.students.php<?php echo '?stud_id=' . $id; ?>" type="button" class="btn btn-secondary mx-1">
                                                <i class="fa fa-address-card"></i> Edit Student Profile
                                                </a>
                                                <br>                                              
                                                <a href="edit.students.php<?php echo '?stud_id=' . $id; ?>" type="button" class="btn btn-info mx-1">
                                                <i class="fa fa-edit"></i> Update
                                                </a>
                                                <br>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['stud_id'] ?>">
                                                <i class="fa fa-trash"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <?php }
                                        } ?>
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
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/datatables-demo.js"></script>

</body>

</html>