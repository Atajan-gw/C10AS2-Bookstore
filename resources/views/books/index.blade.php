<x-layout title="Books">
    <h2 class="mb-4">Books</h2>

    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <form action="{{ route('books.index') }}" method="GET" class="row g-3">
                <div class="col-md-5">
                    <label for="category_id" class="form-label fw-bold">Category</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="author_id" class="form-label fw-bold">Автор</label>
                    <select name="author_id" id="author_id" class="form-select">
                        <option value="">All Authors</option>
                        @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ request('author_id') == $author->id ? 'selected' : '' }}>
                            {{ $author->name }} {{ $author->surname }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end gap-2">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                    @if(request('category_id') || request('author_id'))
                    <a href="{{ route('books.index') }}" class="btn btn-outline-danger">Reset</a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <div class="table-responsive bg-white rounded shadow-sm p-3">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Publisher</th>
                    <th>Settings</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $book)
                <tr>
                    <td><code>{{ $book->code }}</code></td>
                    <td class="fw-bold">{{ $book->name }}</td>
                    <td>{{ $book->author->name }} {{ $book->author->surname }}</td>
                    <td><span class="badge bg-info text-dark">{{ $book->category->name }}</span></td>
                    <td>{{ $book->year->name }}</td>
                    <td>{{ $book->publisher->name }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-outline-success">View</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-muted py-4">Books Not Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $books->withQueryString()->links() }}
        </div>
    </div>
</x-layout>