<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashboard/index.php">
                <div class="sidebar-brand-icon">
                    <img src="../../img/SFAC-logo1.png" alt="SFAC logo" width="50px" height="50px">
                </div>
                <div class="sidebar-brand-text mx-3">GCS - LP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../dashboard/index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <?php if ($_SESSION['role'] == "Super Admin") {
                  echo '
                  <div class="sidebar-heading">
                                  Add New User
                              </div>
                  
                              <!-- Nav Item - Pages Collapse Menu -->
                              <li class="nav-item">
                                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                      aria-expanded="true" aria-controls="collapseTwo">
                                      <i class="fas fa-fw fa-cog"></i>
                                      <span>Add Users</span>
                                  </a>
                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                      <div class="bg-white py-2 collapse-inner rounded">
                                          <h6 class="collapse-header">User Roles Below:</h6>
                                          <a class="collapse-item" href="../super_admin/add.admin.php">Add Admin</a>
                                          <a class="collapse-item" href="../students/add.students.php">Add Students</a>
                                      </div>
                                  </div>
                              </li>
                  
                              <!-- Divider -->
                              <hr class="sidebar-divider">
                  
                              <!-- Heading -->
                              <div class="sidebar-heading">
                                  Existing User Lists
                              </div>
                  
                              <!-- Nav Item - Pages Collapse Menu -->
                              <li class="nav-item">
                                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                      aria-expanded="true" aria-controls="collapsePages">
                                      <i class="fas fa-fw fa-folder"></i>
                                      <span>User Lists</span>
                                  </a>
                                  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                      <div class="bg-white py-2 collapse-inner rounded">
                                      <h6 class="collapse-header">User Lists:</h6>
                                          <a class="collapse-item" href="../super_admin/list.admin.php">Admin List</a>
                                          <a class="collapse-item" href="../students/list.students.php">Student List</a>
                                          
                                          <div class="collapse-divider"></div>
                                          
                                          
                                      </div>
                                  </div>
                              </li>';                        
            }  elseif ($_SESSION['role'] == "Administrator") {     
                echo '
                <div class="sidebar-heading">
                                Manage
                            </div>
                
                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>Manage Students</span>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">Available Functions:</h6>
                                        <a class="collapse-item" href="../students/add.students.php">Add Students</a>
                                        <a class="collapse-item" href="#">Student Evaluation</a>
                                        <a class="collapse-item" href="#">Significant Notes</a>
                                        <a class="collapse-item" href="../students/list.students.php">Student List</a>
                                    </div>
                                </div>
                            </li>
                
                            <!-- Divider -->
                            <hr class="sidebar-divider">
                
                            <!-- Heading -->
                            <div class="sidebar-heading">
                                User Lists
                            </div>
                
                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                    aria-expanded="true" aria-controls="collapsePages">
                                    <i class="fas fa-fw fa-folder"></i>
                                    <span>Forms</span>
                                </a>
                                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Available Forms Below:</h6>                                       
                                        <a class="collapse-item" href="../forms/guidance.php">Blank Forms</a>
                                        
                                        <div class="collapse-divider"></div>
                                        
                                        
                                    </div>
                                </div>
                            </li>'; 
            }  elseif ($_SESSION['role'] == "Student") {
                echo '
                <div class="sidebar-heading">
                                Manage
                            </div>
                
                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>Manage Students</span>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">Available Functions:</h6>
                                        <a class="collapse-item" href="../students/add.students.php">Add Students</a>
                                        <a class="collapse-item" href="../students/list.students.php">Student List</a>
                                    </div>
                                </div>
                            </li>
                
                            <!-- Divider -->
                            <hr class="sidebar-divider">
                
                            <!-- Heading -->
                            <div class="sidebar-heading">
                                User Lists
                            </div>
                
                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                    aria-expanded="true" aria-controls="collapsePages">
                                    <i class="fas fa-fw fa-folder"></i>
                                    <span>Forms</span>
                                </a>
                                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Available Forms Below:</h6>                                       
                                        <a class="collapse-item" href="../forms/guidance.php">Blank Forms</a>
                                        
                                        <div class="collapse-divider"></div>
                                        
                                        
                                    </div>
                                </div>
                            </li>'; 
            }
            ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="../../img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>