<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Display a listing of the books
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    // Store a newly created book in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
        ]);

        $book = Book::create($validated);

        return response()->json($book, 201);
    }

    // Display the specified book
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
    }

    // Update the specified book in storage
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'published_year' => 'sometimes|required|integer',
        ]);

        $book->update($validated);

        return response()->json($book);
    }

    // Remove the specified book from storage
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(['message' => 'Book deleted successfully.']);
    }
}