<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'LegalQ&A')</title>
    @include('partials.head')
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
    @yield('styles')
</head>
<body>

    @include('partials.public-navbar')

    @yield('content')

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/ui.js') }}"></script>
    @yield('scripts')
</body>
</html>
