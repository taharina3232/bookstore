@extends('layouts.app') {{-- Assumes you have a base layout --}}

@section('content')
<div class="container">
    <h2>Book Details</h2>

    {{-- Display the details of the book --}}
    <div class="card">
        <div class="card-header">
            <h3>{{ $book->title }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Published Year:</strong> {{ $book->published_year }}</p>
        </div>
        <div class="card-footer">
            {{-- Edit Button --}}
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>

            {{-- Delete Button with a confirmation --}}
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
            </form>
        </div>
    </div>

    {{-- Back to books list --}}
    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection