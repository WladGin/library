<?php

namespace App\Http\Api\Controllers;

use App\Http\Api\Requests\StoreBookRequest;
use App\Http\Api\Requests\UpdateBookRequest;
use App\Http\API\Resources\BookCollection;
use App\Http\API\Resources\BookResource;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BookCollection
     */
    public function index()
    {
        $books = Book::with(['authors', 'publishingHouses'])->get();
        return new BookCollection($books);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Http\API\Resources\BookResource
     */
    public function store(StoreBookRequest $request)
    {

        $book = Book::create($request->validated());
        $book->authors()->attach($request->get('authors'));
        $book->publishingHouses()->attach($request->get('publishing_house'));

        return new BookResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Book $book
     * @return BookResource
     */
    public function show(Book $book)
    {
        return new BookResource($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBookRequest $request
     * @param Book $book
     * @return \App\Http\API\Resources\BookResource
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());

        if ($request->filled('authors')){
            $book->authors()->sync($request->get('authors'));
        }

        if ($request->filled('publishing_house')){
            $book->publishingHouses()->sync($request->get('publishing_house'));
        }

        $book->refresh();

        return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book $book
     * @return int
     */
    public function destroy(Book $book)
    {
        return Book::destroy($book->id);
    }
}
