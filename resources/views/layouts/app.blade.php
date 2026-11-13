<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'داشبورد') | SkyTask</title>

    {{-- Bootstrap 3.4.1 که قبلاً در public قرار داده‌ای --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    @stack('styles')
</head>
<body class="sky-body">
    <div class="sky-app">
        @include('components.sidebar')

        <div class="sky-main">
            @include('components.topbar')

            <main class="sky-page-content">
                @yield('content')
            </main>
        </div>
    </div>

    <div class="sky-sidebar-overlay" id="skySidebarOverlay"></div>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    @stack('scripts')
</body>
</html>
