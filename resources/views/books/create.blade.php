@extends('layout')

@section('content')
    <h1>Add Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="edition">Edition</label>
            <input type="text" name="edition" id="edition" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_of_pages">Number of Pages</label>
            <input type="number" name="no_of_pages" id="no_of_pages" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
@endsection
