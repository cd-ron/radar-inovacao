<!-- Main Header -->
<header class="main-header">
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Radar</b> Inovação</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Radar</b> Inovação</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">{{ $user->name }} &nbsp <i class="fa fa-angle-down"></i> </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-body">
                            <div class="pull-left">
                                <a href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ URL::route('logout') }}" class="btn btn-default btn-flat">Sair</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>