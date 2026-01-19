<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'LegalQ&A'))</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
    
    @yield('styles')
    <script>
        // Pass Laravel Auth state to JS for the "Demo" logic
        let dbRole = @json(auth()->user()?->role ?? 'guest');
        // Map database roles to frontend demo roles
        if (dbRole === 'lawyer') {
            const isPending = @json(auth()->user()?->lawyerProfile?->status === 'pending');
            dbRole = isPending ? 'lawyer-pending' : 'lawyer-approved'; 
        } 
        window.currentDemoRole = dbRole;
        window.authUser = @json(auth()->user());
    </script>
</head>
<body class="bg-dark text-light">
    
    @include('partials.public-navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: "{{ session('success') }}",
                    background: '#1e293b', 
                    color: '#fff',
                    confirmButtonColor: '#eab308'
                });
            });
        @endif
    </script>
    <!-- Custom Scripts -->
    @yield('scripts')
</body>
</html>
