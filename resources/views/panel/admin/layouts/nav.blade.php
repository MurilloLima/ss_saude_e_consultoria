<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-white" href="#">
                @yield('title')
            </a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{-- <li class="nav-item">
            <a class="nav-link color-white" href=""><i class="fa fa-lock"></i>
                Alterar senha</a>
        </li> --}}
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link color-white" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt color-orange"></i> Sair
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-secondary">
    <!-- Brand Logo -->
    <a href="{{ route('demonstrative.index') }}" class="brand-link">
        <img src="{{ asset('logos/favicon.svg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">+SS</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('demonstrative.index') }}"
                        class="nav-link {{ $activePage == 'demonstrative.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Demonstrativo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="{{ route('demonstrative.report') }}"
                        class="nav-link {{ $activePage == 'demonstrative.report' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Relatórios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>