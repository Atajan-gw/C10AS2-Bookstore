<x-layout title="Authors">
    <h2 class="mb-4">Authors</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse($authors as $author)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $author->name }} {{ $author->surname }}</h5>
                    <p class="card-text text-muted">
                        <small>
                            {{ $author->birth_date }} —
                            {{ $author->death_date ?? 'Null' }}
                        </small>
                    </p>
                    <p class="card-text">{{ Str::limit($author->biography, 100) }}</p>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <a href="{{ route('authors.show', $author->id) }}" class="btn btn-sm btn-success">Details</a>
                </div>
            </div>
        </div>
        @empty
        <p class="text-muted">Authors not found.</p>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $authors->links() }}
    </div>
</x-layout>