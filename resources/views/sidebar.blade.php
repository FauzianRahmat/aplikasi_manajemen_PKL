    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(57, 137, 230)"> 
<!-- Brand Logo -->
<a href="({{ route('welcome') }})" class="brand-link">
    <img src="{{ asset('admin/dist/img/pkl logo.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PRAKERIN</span>
</a>

<!-- Sidebar -->
<div class="sidebar mt-2">
    <!-- SidebarSearch Form -->
    <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
        </button>
        </div>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/siswa/create" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Siswa
            </p>
            </a>
        </li>
        <li class="nav-item">
        <a href="/jurusan/create" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
            <p>
                jurusan
            </p>
        </a>
        </li>
        <li class="nav-item">
            <a href="/perusahaan/create" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Perusahaan
        </p>
        </a>
        <li class="nav-item">
        <a href="/absen/create" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Absensi
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="/dokumentasi/create" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dokumentasi
            </p>
        </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
</div><br><br><br><br><br><br><br><br><br><br><br>

<!-- /.sidebar -->
<form action="{{ route('auth.logout') }}" method="POST">
    @csrf

<button class="custom-btn btn-1">Keluar</button>
</form>



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