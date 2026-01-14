<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: var(--bg-secondary); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}" style="color: var(--warning);">
            <i class="fas fa-balance-scale me-2"></i>Legal Q&A
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Questions</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('lawyers') }}">Lawyers</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                <!-- Role Specific Links -->
                <li class="nav-item user-only d-none"><a class="nav-link" href="{{ route('ask-question') }}">Ask Question</a></li>
                <li class="nav-item lawyer-only d-none"><a class="nav-link" href="{{ route('new-article') }}">Write Article</a></li>
                <li class="nav-item lawyer-only d-none"><a class="nav-link" href="{{ route('my-articles') }}">My Articles</a></li>
            </ul>
            <div class="d-flex align-items-center gap-3">
                <div class="input-group input-group-sm d-none d-lg-flex" style="width: auto;">
                    <span class="input-group-text bg-dark border-secondary text-secondary">View Mode</span>
                    <select id="roleSelector" class="form-select form-select-sm bg-dark border-secondary text-white">
                        <option value="guest">Guest</option>
                        <option value="user">User</option>
                        <option value="lawyer-pending">Lawyer (Pending)</option>
                        <option value="lawyer-approved">Lawyer (Approved)</option>
                    </select>
                </div>
                <!-- Mobile View Mode (visible only on small screens) -->
                <div class="d-lg-none w-100 mb-2">
                     <small class="text-muted d-block mb-1">View Mode</small>
                     <select class="form-select form-select-sm bg-dark border-secondary text-white" onchange="document.getElementById('roleSelector').value = this.value; document.getElementById('roleSelector').dispatchEvent(new Event('change'));">
                        <option value="guest">Guest</option>
                        <option value="user">User</option>
                        <option value="lawyer-pending">Lawyer (Pending)</option>
                        <option value="lawyer-approved">Lawyer (Approved)</option>
                    </select>
                </div>
                
                <div class="auth-buttons guest-only d-flex gap-2">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm rounded-pill px-3">Sign In</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm rounded-pill px-3">Sign Up</a>
                </div>

                <div class="user-menu logged-in-only d-none">
                     <div class="dropdown">
                        <button class="btn btn-link text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle fa-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark shadow">
                             <li><span class="dropdown-header" id="userMenuName">User Name</span></li>
                             <li><hr class="dropdown-divider"></li>
                             <li><a class="dropdown-item" href="#" onclick="handleLogout()">Logout</a></li>
                        </ul>
                     </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="pendingLawyerBanner" class="bg-warning text-dark text-center py-2 fw-bold d-none" style="margin-top: 56px;">
    <div class="container">
        <i class="fas fa-exclamation-triangle me-2"></i> Pending admin approval. You cannot answer or post articles yet.
    </div>
</div>
