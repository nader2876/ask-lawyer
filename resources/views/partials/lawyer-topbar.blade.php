<header class="admin-topbar">
    <div class="topbar-left">
        <button id="mobile-menu-toggle" class="btn btn-link d-md-none">
            <i class="fas fa-bars"></i>
        </button>
        <h5 class="mb-0">@yield('page-title', 'Lawyer Workspace')</h5>
    </div>
    
    <div class="topbar-right">
        <div class="user-menu dropdown">
            <button class="btn btn-link dropdown-toggle text-decoration-none" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://ui-avatars.com/api/?name=Lawyer+User&background=random" alt="User" class="user-avatar">
                <span class="d-none d-md-inline ms-2">Lawyer Name</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                <li><a class="dropdown-item" href="{{ route('lawyer.profile.edit') }}"><i class="fas fa-user me-2"></i>Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('home') }}"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
            </ul>
        </div>
    </div>
</header>
