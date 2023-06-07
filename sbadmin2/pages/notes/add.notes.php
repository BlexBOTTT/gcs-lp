<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../includes/header.php';

    $stud_id = $_GET['stud_id']
    ?>
</head>




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

                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div> -->
                    
                    <!-- Content Row -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Significant Notes</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <div class="col-lg-12">

                            <?php
                                if (!empty($_SESSION['errors'])) {
                                    echo '<div class="alert alert-danger fade show" role="alert">
                                        <div class="d-flex justify-content-between align-items-center">';
                                            echo '<div>';
                                                foreach ($_SESSION['errors'] as $error) {
                                                    echo '<div class="mb-2">' . $error . '</div>';
                                                }
                                            echo '</div>';
                                            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                            </div>';
                                unset($_SESSION['errors']);
                            } elseif (!empty($_SESSION['success'])) {
                                echo ' <div class="alert alert-success fade show" role="alert">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="alert-text"><strong>Successfully Added!</strong></span>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                            </div>';
                                unset($_SESSION['success']);
                            }
                            ?>

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Significant Notes</h6>
                                </div>
                                <div class="card-body">

                                    <form action="userData/user.add.notes.php?stud_id=<?php echo $stud_id ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row mx-auto">
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                    <label class="form-label">Date of Assessment</label>
                                                    <input type="date" name="date" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                    <label class="form-label">Incident</label>
                                                    <input type="text" name="incident" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                    <label class="form-label">Remarks</label>
                                                    <input type="text" name="remarks" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mx-auto">
                                            <div class="col-md-4">
                                                <a class="btn btn-secondary" href="view.notes.php">Go Back</a>
                                            </div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <div class="input-group input-group-outline my-3 justify-content-end">
                                                    <button class="btn btn-danger" type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>


                    </div>
                    
                    

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
     
    <!-- Script for custom file input label with selected filename -->
    <script>
        const fileInput = document.getElementById('prof_img');
        const fileLabel = document.querySelector('label.custom-file-label');
        const MAX_FILENAME_LENGTH = 20;

        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
            let fileName = this.files[0].name;
            const fileExtension = fileName.split('.').pop();
            const fileNameWithoutExtension = fileName.substring(0, fileName.length - fileExtension.length - 1);
            
            if (fileNameWithoutExtension.length > MAX_FILENAME_LENGTH) {
                const truncatedStart = fileNameWithoutExtension.substring(0, Math.floor(MAX_FILENAME_LENGTH / 2) - 2);
                const truncatedEnd = fileNameWithoutExtension.substring(fileNameWithoutExtension.length - 5);
                fileName = truncatedStart + '...' + truncatedEnd + '.' + fileExtension;
            }
            
            fileLabel.textContent = fileName;
            } else {
            fileLabel.textContent = 'Choose file';
            }
        });
    </script>

    <script src="../../js/bootstrap.bundle.min.js"></script>
            
</body>

</html>