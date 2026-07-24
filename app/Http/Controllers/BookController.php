<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Year;
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

        if ($request->has('publisher_id') && $request->publisher_id != '') {
            $query->where('publisher_id', $request->publisher_id);
        }

        if ($request->has('year_id') && $request->year_id != '') {
            $query->where('year_id', $request->year_id);
        }



        $years = Year::all();
        $publishers = Publisher::all();
        $books = $query->paginate(25);
        $categories = Category::all();
        $authors = Author::all();

        return view('books.index', compact('books', 'categories', 'authors', 'publishers', 'years'));
    }

    public function search(Request $request) {
        $query = Book::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;

            $query->where(function($q) use ($search){
                $q->where('name', 'like', "%{$search}%")->orWhere('code', 'like', "%{$search}%");
            });
        }

        return view('books.index', compact('search'));
    }

    public function show(Book $book) {
        $book->load(['category', 'author', 'year', 'language', 'publisher']);

        return view('books.show', compact('book'));
    }
}
