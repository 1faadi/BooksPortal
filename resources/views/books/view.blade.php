@extends('layout')

@section('content')
    <h1>Book Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text">Author: {{ $book->author }}</p>
            <p class="card-text">Edition: {{ $book->edition }}</p>
            <p class="card-text">No. of Pages: {{ $book->no_of_pages }}</p>
            <a href="{{ route('books.edit', $book) }}" class="btn btn-success">Edit</a>
            <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
            </form>
        </div>
    </div>
@endsection
