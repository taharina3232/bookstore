@extends('layouts.app') {{-- Assumes you have a base layout --}}

@section('content')
<div class="container">
    <h2>Edit Book</h2>

    {{-- Display validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Book edit form --}}
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- This is required to make a PUT request --}}

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $book->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author:</label>
            <input type="text" name="author" class="form-control" value="{{ old('author', $book->author) }}" required>
        </div>

        <div class="mb-3">
            <label for="published_year" class="form-label">Published Year:</label>
            <input type="number" name="published_year" class="form-control" value="{{ old('published_year', $book->published_year) }}" required min="1000" max="{{ now()->year }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection