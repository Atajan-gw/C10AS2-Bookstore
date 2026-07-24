<x-layout title="{{ $author->name }} {{ $author->surname }}">
    <div class="mb-3">
        <a href="{{ route('authors.index') }}" class="btn btn-outline-secondary btn-sm">&larr; Back to Authors</a>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h2>{{ $author->name }} {{ $author->surname }}</h2>
            <p class="text-muted">
                <strong>Years of life:</strong> {{ $author->birth_date }} — {{ $author->death_date ?? 'present time' }}
            </p>
            <hr>
            <h5>Biography</h5>
            <p>{{ $author->biography }}</p>
        </div>
    </div>

    <h4>Books by this Author</h4>
    <div class="list-group shadow-sm">
        @forelse($author->books as $book)
        <a href="{{ route('books.show', $book->id) }}" class="list-group-item list-group-item-action d-flex justify-between align-items-center">
            <div>
                <strong>{{ $book->name }}</strong>
                <small class="text-muted">({{ $book->year->name }})</small>
            </div>
            <span class="badge bg-secondary">{{ $book->category->name }}</span>
        </a>
        @empty
        <div class="list-group-item text-muted">This author has no added books.</div>
        @endforelse
    </div>
</x-layout>