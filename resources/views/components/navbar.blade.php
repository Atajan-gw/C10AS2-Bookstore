<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icons/bootstrap-icons.min.css">

    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">LIBRARY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Main</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('books.*') ? 'active fw-bold' : '' }}" href="{{ route('books.index') }}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('authors.*') ? 'active fw-bold' : '' }}" href="{{ route('authors.index') }}">Authors</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>