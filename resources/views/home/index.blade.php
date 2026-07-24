<x-layout title="Main | Library">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
        <div class="container-fluid py-3">
            <div class="h1 display-5 fw-bold text-primary">
                Welcome to Library!
            </div>
            <a class="btn btn-primary btn-lg" href="{{ route('books.index') }}">Books</a>
        </div>
    </div>
</x-layout>