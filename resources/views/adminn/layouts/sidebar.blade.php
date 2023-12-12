<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="/index.html">
                        <img src="{{ asset('adminn/images/logo.png') }}" alt="Mono">
                        <span class="brand-name">MONO</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-left" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="section-title">
                            Web Setting
                        </li>
                        @if (session('role') == 'admin')
                            <li>
                                <a class="sidenav-item-link" href="{{ Route('dashboard') }}">
                                    <i class="mdi mdi-wechat"></i>
                                    <span class="nav-text">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ Route('menu_admin') }}">
                                    <i class="mdi mdi-wechat"></i>
                                    <span class="nav-text">Menu</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ Route('userr') }}">
                                    <i class="mdi mdi-wechat"></i>
                                    <span class="nav-text">User</span>
                                </a>
                            </li>
                        @endif


                        <li>
                            <a class="sidenav-item-link" href="{{ Route('transaksi') }}">
                                <i class="mdi mdi-wechat"></i>
                                <span class="nav-text">Transaksi</span>
                            </a>
                        </li>
                        <li>
                            <a class="sidenav-item-link" href="{{ Route('logout') }}">
                                <i class="mdi mdi-wechat"></i>
                                <span class="nav-text">Logout</span>
                            </a>
                        </li>
                </div>
            </div>
        </aside>
