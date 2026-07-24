<x-layout title="{{ $book->name }}">
    <div class="mb-3">
        <a href="{{ route('books.index') }}" class="btn btn-outline-secondary btn-sm">&larr; Back to List</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">{{ $book->name }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Code:</strong> <code>{{ $book->code }}</code></p>
                    <p><strong>Author:</strong>
                        <a href="{{ route('authors.show', $book->author_id) }}">
                            {{ $book->author->name }} {{ $book->author->surname }}
                        </a>
                    </p>
                    <p><strong>Category:</strong> {{ $book->category->name }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Year:</strong> {{ $book->year->name }}</p>
                    <p><strong>Language:</strong> {{ $book->language->name }}</p>
                    <p><strong>Publisher:</strong> {{ $book->publisher->name }}</p>
                    <p><strong>Pages:</strong> {{ $book->page_number }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>