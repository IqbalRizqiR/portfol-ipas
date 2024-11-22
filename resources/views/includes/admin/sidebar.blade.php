<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('anggota*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('anggota.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Anggota</span></a>
    </li>
    <li class="nav-item {{ Request::is('image*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('image.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Image</span></a>
    </li>
    <li class="nav-item {{ Request::is('setting*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('setting.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Setting</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
