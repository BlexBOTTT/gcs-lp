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
                        <h1 class="h3 mb-0 text-gray-800">Add New Administrator</h1>
                    </div>
                    
                    <!-- Content Row -->
                
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
                                    <h6 class="m-0 font-weight-bold text-primary">Add Administrator</h6>
                                </div>
                                <div class="card-body">

                                    
                                    
                                    <form action="userData/user.add.admin.php" method="POST" enctype="multipart/form-data">

                                        <div class="row mx-auto justify-content-center">
                                            <div class="col-md-4 my-4">
                                                <div class="custom-file">
                                                    <div class="text-center mb-4">
                                                        <img class="img-fluid img-circle" src="../../img/user-logo.png"
                                                            alt="User profile picture" style="width: 100px; height: 100px;">
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="form-group col-md-12">                                                                  
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="form-control" name="prof_img" id="prof_img" required>
                                                                    <label for="prof_img" class="custom-file-label">Choose file</label> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mx-auto">
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" name="firstname" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" name="lastname" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                <label class="form-label">Email Address</label>
                                                    <input type="email" name="email" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mx-auto">
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                    <label class="form-label">Username</label>
                                                    <input type="text" name="username" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="my-3">
                                                    <label class="form-label">Confirm Password</label>
                                                    <input type="password" name="password2" class="form-control" autocomplete="off"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mx-auto">
                                        <div class="col-md-4">
                                                <a class="btn btn-secondary" href="list.admin.php">Go Back</a>
                                            </div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4 ">
                                                <div class="input-group input-group-outline my-3 justify-content-end">
                                                    <button class="btn btn-danger" type="submit" name="submit">
                                                            Submit
                                                        </button>
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