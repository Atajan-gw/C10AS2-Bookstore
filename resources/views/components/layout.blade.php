<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Library' }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/bootstrap-icons.min.css') }}">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <x-navbar />

    <main class="container my-4 flex-grow-1">
        {{ $slot }}
    </main>

    <footer class="bg-white border-top py-3 mt-auto text-center text-muted">
        <div class="container">
            <small>&copy; {{ date('Y') }} Library System. All rights reserved.</small>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>