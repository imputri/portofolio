<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <!-- Dashboard -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Beranda</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>

        <!-- Konten -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Konten</span>
        </li>

        <!-- User -->
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('biodata.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-person-lines-fill"></i>
                </span>
                <span class="hide-menu">Biodata</span>
            </a>
        </li>

        <!-- Kerajinan -->
        
        <!-- Kerajinan -->
        <li class="sidebar-item">
            <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                    <i class="bi bi-bounding-box"></i>
                </span>
                <span class="hide-menu">Skill</span>
            </a>
        </li>
        
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('pendidikan.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-book-half"></i>
                </span>
                <span class="hide-menu">Pendidikan</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('pengalaman.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-briefcase-fill"></i>
                </span>
                <span class="hide-menu">Pengalaman</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('project.index') }}" aria-expanded="false">
                <span>
                    <i class="bi bi-bookmarks"></i>
                </span>
                <span class="hide-menu">Project</span>
            </a>
        </li>
    </ul>
</nav>
<!-- End Sidebar navigation -->


{{-- {{ route('dashboard.home') }} --}}