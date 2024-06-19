<body data-sidebar="colored">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                          <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-dark.png" alt="logo-sm-dark" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm-dark.png" alt="logo-dark" height="25">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.png" alt="logo-sm-light" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm-light.png" alt="logo-light" height="25">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>
            
                      <!-- start page title -->
                      <div class="page-title-box align-self-center d-none d-md-block">
                        <h4 class="page-title mb-0">Dashboard</h4>
                      </div>
                      <!-- end page title -->
                    </div>

                    <!-- <div class="d-flex">

                         <!-- App Search-->
                         <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Product name ...">
                                <span class="ri-search-line"></span>
                            </div>
                      </form>

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="mb-3 m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                

                        <div class="dropdown d-none d-lg-inline-block ms-1">

                      
                        <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="assets/images/flags/india.jpg" alt="Header Language" height="16">
                            </button>
                            
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                            
                           
                        </div>

            
                        <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-outline-success" >
                            <a href="" class="waves-effect">Customer Page</a>
                            </button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-outline-danger">
                            <a href="Logout_ctr" class="waves-effect">Logout</a>
                            </button>
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="ri-settings-2-line"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                 <!-- LOGO -->
                 <div class="navbar-brand-box">
</br>
                 <span class="logo-sm">
    <!-- Removed img tag -->
                   </span>
               <span class="logo-lg">
    <!-- Removed img tag -->
                  </spa>
                    </a>

  
                        <span class="logo-lg">
                        <h5 style="color: #FFFF00; font-size: 20px; margin-left: 10px;">
                           <img src="assets/images/logo-sm-light.png" alt="logo-light" height="22">&nbsp;&nbsp;&nbsp;Admin</h5>
                        </span>
                      
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>

                <div data-simplebar class="vertical-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                   
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            
                            <li>
                                <a href="Product_ctr/Product_table_view" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="Category_ctr" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="Settings_ctr/pincode" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Pincode</span>
                                </a>
                            </li>
                            <li>
                                <a href="Settings_ctr/banner" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="Product_ctr" class="waves-effect">
                                    <i class="uim uim-airplay"></i>
                                    <span>Product</span>
                                </a>
                            </li>
                            
                    </div> 
                    <!-- Sidebar -->
                </div>
                  
                <div class="dropdown px-3 sidebar-user sidebar-user-info">
                    <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            
                            <!-- <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-2.jpg" class="img-fluid header-profile-user rounded-circle" alt="">
                            </div> -->

                            <!-- <div class="flex-grow-1 ms-2 text-start">
                                <span class="ms-1 fw-medium user-name-text">Steven Deese</span>
                            </div> -->

                            <!-- <div class="flex-shrink-0 text-end">
                                <i class="mdi mdi-dots-vertical font-size-16"></i>
                            </div> -->
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                        <a class="dropdown-item" href="pages-faq.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                        <a class="dropdown-item" href="#"><span class="badge bg-primary mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    </div>
                </div>

            </div>
            <!-- Left Sidebar End -->
