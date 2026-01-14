<header class="admin-topbar">
    <h1 class="topbar-title">{{ $title ?? 'Admin Panel' }}</h1>
    
    <div class="topbar-actions">
        <div class="user-menu">
            <div class="user-avatar">A</div>
            <div class="user-info">
                <div class="user-name">Admin User</div>
                <div class="user-role">Administrator</div>
            </div>
        </div>
        <button class="btn btn-outline-danger btn-sm" onclick="demoAction('Logout')">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </button>
    </div>
</header>
