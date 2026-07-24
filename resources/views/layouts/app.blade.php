<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Library' }}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icons/bootstrap-icons.min.css">

    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="bg-light">
        <x-navbar />

        <main class="container my-4">
            {{ $slot }}
        </main>
    </div>
</body>
</html>