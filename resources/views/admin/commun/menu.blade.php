<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    <li class="header">MENU</li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.dash') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.dash') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>


     <li class="<?php echo ( starts_with($route, ADMIN.'.host') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.host') }}">
            <i class="fa fa-bar-chart"></i>
            <span>Hosting</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.orders') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.orders') }}">
            <i class="fa fa-shopping-cart"></i>
            <span>Orders</span>
        </a>
    </li>


    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <i class="fa fa-list"></i>
            <span>Categories</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.categories') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.categories.index') }}">
            <i class="fa fa-address-card-o"></i>
            <span>Documents</span>
        </a>
    </li>

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.users') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.users.index') }}">
            <i class="fa fa-users"></i>
            <span>Users</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.users') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.users.index') }}">
            <i class="fa fa-users"></i>
            <span>Bookings</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Admin Control Panel</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="http://159.89.115.103:8002"><i class="fa fa-circle-o"></i>Brainy</a></li>
            <li><a href="http://uztracker.me"><i class="fa fa-circle-o"></i>uztracker</a></li>
            <li><a href="http://cctld.uz"><i class="fa fa-circle-o"></i>Whois Domain</a></li>
        </ul>
    </li>
    @endif
</ul>
