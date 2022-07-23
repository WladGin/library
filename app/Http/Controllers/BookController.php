<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::with(['authors', 'publishingHouses'])->paginate(5);

        if ($request->ajax()){
            return view('book_list', compact('books'));
        }

        return view('main_page', compact('books'));
    }
}
