<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeaaL</title>
    <link rel="icon" href="{{ asset('images/logo.svg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('components.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
