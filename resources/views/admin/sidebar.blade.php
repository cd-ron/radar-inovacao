<aside class="main-sidebar">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ url('img/user-admin.png') }}" class="img-circle" alt="{{$user->name}}">
        </div>
        <div class="pull-left info">
            <p>{{$user->name}}</p>
            <p>{{$user->role->name}}</p>
        </div>
    </div>
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">NAVEGAÇÃO</li>
            @can('admin-index')
            <li {{ (Request::is('admin') ? 'class=active' : '') }}>
                <a href="{{URL::route('admin')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @endcan
            @can('admin-user-index')
                <li class="treeview
                    {{ (Request::is('admin/user') ? 'active' : '') }}
                    {{ (Request::is('admin/role') ? 'active' : '') }}
                " >
                    <a href="#">
                        <i class="fa fa-pencil"></i> <span>Cadastro</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li {{ (Request::is('admin/user') ? 'class=active' : '') }}>
                            <a href="{{URL::route('admin.user.index')}}">
                                <i class="fa fa-user"></i>
                                <span>Usuários</span>
                            </a>
                        </li>
                        <li {{ (Request::is('admin/role') ? 'class=active' : '') }}>
                            <a href="{{URL::route('admin.role.index')}}">
                                <i class="fa fa-users"></i>
                                <span>Papeis</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('admin-categoryevent-index')
                <li {{ (Request::is('categoryevent') ? 'class=active' : '') }}>
                    <a href="{{URL::route('admin.categoryevent.index')}}">
                        <i class="fa fa-edit"></i>
                        <span>Categoria de eventos</span>
                    </a>
                </li>
            @endcan
            @can('admin-event-index')
                <li {{ (Request::is('event') ? 'class=active' : '') }}>
                    <a href="{{URL::route('admin.event.index')}}">
                        <i class="fa fa-calendar"></i>
                        <span>Eventos</span>
                    </a>
                </li>
            @endcan
        </ul>
    </section>
</aside>