<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(57, 137, 230)"> 
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('admin/dist/img/pkl logo.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">    
        <span class="brand-text font-weight-light">&ensp; <strong>PRAKERIN</strong></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar mt-2">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                @can('isAdmin')
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
                <p>
                Dashboard
            </p>
    </a>
        </li>
    <li class="nav-item">
        <a href="/siswa/create" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
                <p>
                Siswa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/jurusan/create" class="nav-link">
            <i class="nav-icon fas fa-school"></i>
                <p>
                jurusan
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/perusahaan/create" class="nav-link">
            <i class="nav-icon fas fa-city"></i>
                <p>
                Perusahaan
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/absen/create" class="nav-link">
            <i class="nav-icon fas fa-pen"></i>
                <p>
                Absensi
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/pkl/create" class="nav-link">
            <i class="nav-icon fas fa-industry"></i>
                <p>
                PKL
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/dokumentasi/create" class="nav-link">
            <i class="nav-icon fas fa-folder"></i>
                <p>
                Dokumentasi
            </p>
        </a>
    </li>

    @elsecan('isGuru')
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                    <p>
                    Dashboard
                </p>
        </a>
            </li>
        <li class="nav-item">
            <a href="/jurusan/create" class="nav-link">
                <i class="nav-icon fas fa-school"></i>
                    <p>
                    jurusan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/perusahaan/create" class="nav-link">
                <i class="nav-icon fas fa-city"></i>
                    <p>
                    Perusahaan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/pkl/create" class="nav-link">
                <i class="nav-icon fas fa-industry"></i>
                    <p>
                    PKL
                </p>
            </a>
        </li>

        @else
        <li class="nav-item">
            <a href="/siswa/create" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                    <p>
                    Siswa
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/absen/create" class="nav-link">
                <i class="nav-icon fas fa-pen"></i>
                    <p>
                    Absensi
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/dokumentasi/create" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
                    <p>
                    Dokumentasi
                </p>
            </a>
        </li>
        @endcan
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
        <button class="btn custom-btn btn-danger">Keluar</button>
        </form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->