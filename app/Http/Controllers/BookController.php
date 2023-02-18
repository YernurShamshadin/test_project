<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Author;
use App\Models\Book;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();

        return view('book.create', compact('authors'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Book::firstOrCreate($data);

        return redirect()->route('book.index');
    }
}
