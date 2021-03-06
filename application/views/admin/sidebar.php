<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('Admin/home') ?>">
        <div class="sidebar-brand-icon ">
            <img src="<?php echo base_url('UserAssets/img/mainlogo.png') ?>" class="img-thumbnail border-0" style="background: transparent;" alt="">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($this->uri->segment(2) == "home") : ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo site_url('Admin/home') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Users and Bookings
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-light py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <a class="collapse-item" href="buttons.html">All Users</a>
                <a class="collapse-item" href="cards.html">New Users</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-list"></i>
            <span>Bookings</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Booking Category:</h6>
                <a class="collapse-item" href="utilities-color.html">All Bookings</a>
                <a class="collapse-item" href="utilities-border.html">Add New</a>
                <a class="collapse-item" href="utilities-animation.html">Completed</a>
                <a class="collapse-item" href="utilities-other.html">Ongoing</a>
            </div>
        </div>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Portfolio
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gallery Options:</h6>
                <a class="collapse-item" href="<?php echo site_url('Admin/Categories') ?>">Categories</a>
                <a class="collapse-item" href="<?php echo site_url('Admin/Images') ?>">Images</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Our Works</span></a>
    </li> -->

    <!-- Nav Item - Services -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Admin/services') ?>">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Services</span></a>
    </li>

    <!-- Nav Item - Teams -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Admin/teams') ?>">
            <i class="fas fa-fw fa-hands-helping"></i>
            <span>Teams</span></a>
    </li>

    <!-- Nav Item - Vendors -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Admin/vendors') ?>">
            <i class="fas fa-fw fa-dolly"></i>
            <span>Vendors</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Admin/consultations') ?>">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Consultations</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Admin/estimates') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Estimates</span></a>
    </li>

    <!-- Nav Item - Blogs -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Admin/blogs') ?>">
            <i class="fab fa-fw fa-blogger-b"></i>
            <span>Blogs</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>