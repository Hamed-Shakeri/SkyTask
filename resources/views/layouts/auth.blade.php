
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ورود و ثبت‌نام') | SkyTask</title>

    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<body>

    <main class="sky-auth-wrapper">
        @yield('content')
    </main>

    @stack('scripts')

</body>
</html>
