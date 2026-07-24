<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Author;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request){
        $query = Book::with(['category', 'author', 'year', 'language', 'publisher']);

        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('author_id') && $request->author_id != '') {
            $query->where('author_id', $request->author_id);
        }

        $books = $query->paginate(25);
        $categories = Category::all();
        $authors = Author::all();

        return view('books.index', compact('books', 'categories', 'authors'));
    }

    public function show(Book $book) {
        $book->load(['category', 'author', 'year', 'language', 'publisher']);

        return view('books.show', compact('book'));
    }
}
