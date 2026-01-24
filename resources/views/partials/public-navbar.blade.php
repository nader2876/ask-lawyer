<nav class="navbar navbar-expand-lg navbar-dark fixed-top public-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-balance-scale me-2"></i>Legal Q&A
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">Questions</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('lawyers') ? 'active' : '' }}" href="{{ route('lawyers') }}">Lawyers</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
                @auth
                    @if(Auth::user()->role === 'lawyer')
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('lawyer.dashboard') ? 'active' : '' }}" href="{{ route('lawyer.dashboard') }}">Lawyer Panel</a></li>
                    @endif
                @endauth
                @if(request()->routeIs('ask-question'))
                 <li class="nav-item"><a class="nav-link active" href="{{ route('ask-question') }}">Ask Question</a></li>
                @endif
            </ul>
            <div class="d-flex align-items-center gap-3">
            
                
                @guest
                <div class="auth-buttons d-flex gap-2">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Sign In</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Sign Up</a>
                </div>
                @endguest

                @auth
                <div class="user-menu">
                     <div class="dropdown">
                        <button class="btn btn-link text-white text-decoration-none dropdown-toggle d-flex align-items-center p-1" data-bs-toggle="dropdown" style="border-radius: 50rem; transition: background 0.2s;">
                        @if(Auth::user()->lawyerProfile?->profile_photo_path)   
                        <img src="{{ asset('storage/' . Auth::user()->lawyerProfile?->profile_photo_path) }}" class="rounded-circle" style="width: 32px; height: 32px; object-fit: cover; border: 2px solid rgba(255,255,255,0.1); margin-right: 2px;">
                        @else
                        <i class="fas fa-user-circle fa-lg"></i>
                        @endif
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark shadow">
                             <li><h6 class="dropdown-header">{{ Auth::user()->name }}</h6></li>
                             
                             @if(Auth::user()->role === 'admin')
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                             @elseif(Auth::user()->role === 'lawyer')
                                <li><a class="dropdown-item" href="{{ route('lawyer.dashboard') }}">Lawyer Dashboard</a></li>
                             @else
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a></li>
                             @endif

                             <li><hr class="dropdown-divider"></li>
                             <li>
                                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="#" onclick="confirmUserLogout(event)">Logout</a>
                             </li>
                        </ul>
                     </div>
                </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
    function confirmUserLogout(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out of your account.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#eab308', // Using gold/warning color for public site
            cancelButtonColor: '#d33',
            background: '#1e293b',
            color: '#fff',
            confirmButtonText: 'Yes, Logout'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit();
            }
        })
    }
</script>
@php
    $isPendingLawyer = Auth::check() && Auth::user()->role === 'lawyer' && Auth::user()->lawyerProfile?->status === 'pending';
@endphp

<div id="pendingLawyerBanner" class="bg-warning text-dark text-center py-2 fw-bold {{ $isPendingLawyer ? '' : 'd-none' }}" style="margin-top: 75px;">
    <div class="container">
        <i class="fas fa-exclamation-triangle me-2"></i> Pending admin approval. You cannot answer or post articles yet.
    </div>
</div>
