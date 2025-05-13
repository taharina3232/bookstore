@extends('layouts.app') {{-- Assumes you have a base layout --}}

@section('content')
<div class="container">
    <h2>Create New Book</h2>

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

    {{-- Book creation form --}}
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author:</label>
            <input type="text" name="author" class="form-control" value="{{ old('author') }}" required>
        </div>

        <div class="mb-3">
            <label for="published_year" class="form-label">Published Year:</label>
            <input type="number" name="published_year" class="form-control" value="{{ old('published_year') }}" required min="1000" max="{{ now()->year }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection