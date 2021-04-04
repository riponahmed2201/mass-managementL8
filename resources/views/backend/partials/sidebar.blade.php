
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin.dashboard')}}">
                <img alt="image" src="{{asset('assets/backend/img/logo.png')}}" class="header-logo" />
                <span class="logo-name">MMS</span>
            </a>

        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ request()->is('admin/dashboard') ? 'active' :''}}">
                <a href="{{route('admin.dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Food Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="chat.html">All Food Category</a></li>
                    <li><a class="nav-link" href="portfolio.html">Create Food Category</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Food Item Name</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="email-inbox.html">All Food Item Name</a></li>
                    <li><a class="nav-link" href="email-compose.html">Create Food Item Name</a></li>
                </ul>
            </li>

            <li class="menu-header">Expense</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Expense</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="icon-font-awesome.html">All Expense</a></li>
                    <li><a class="nav-link" href="icon-material.html">Create Expense</a></li>
                </ul>
            </li>

            <li class="menu-header">Member Management</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Member</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('member.index')}}">All Member</a></li>
                    <li><a class="nav-link" href="{{route('member.create')}}">Create Member</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
