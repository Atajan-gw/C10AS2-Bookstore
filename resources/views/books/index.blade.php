<x-layout title="Books">
    <h2 class="mb-4">Books</h2>
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <form action="{{ route('books.index') }}" method="GET" class="row g-3">
                <div class="col">
                    <label for="category_id" class="form-label fw-bold">Category</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">Categories</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="author_id" class="form-label fw-bold">Authors</label>
                    <select name="author_id" id="author_id" class="form-select">
                        <option value="">Authors</option>
                        @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ request('author_id') == $author->id ? 'selected' : '' }}>
                            {{ $author->name }} {{ $author->surname }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="publisher_id" class="form-label fw-bold">Publishers</label>
                    <select name="publisher_id" id="publisher_id" class="form-select">
                        <option value="">Publishers</option>
                        @foreach($publishers as $publisher)
                        <option value="{{ $publisher->id }}" {{ request('publisher_id') == $publisher->id ? 'selected' : '' }}>
                            {{ $publisher->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="year_id" class="form-label fw-bold">Years</label>
                    <select name="year_id" id="year_id" class="form-select">
                        <option value="">Years</option>
                        @foreach($years as $year)
                        <option value="{{ $year->id }}" {{ request('year_id') == $year->id ? 'selected' : '' }}>
                            {{ $year->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="search" class="form-label fw-bold">Search</label>
                    <input type="text" name="search" id="search" class="form-control w-100" value="{{ request('search') }}" placeholder="Search:">
                </div>
                <div class="col d-flex align-items-end gap-2 mt-3">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                    @if(request('category_id') || request('author_id') || request('publisher_id') || request('year_id') || request('search'))
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
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-outline-primary">View</a>
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