@extends('layout.app')
@section('title','All Loans')
@section('content')

<div>
    Loooannnnsss
    @include('components.message')
{{--
    @foreach ($books as $book)
    <div>
        <p>{{$book->book_name}}</p>
        <p>{{$book->author}}</p>
        <p>{{$book->genre->genre}}</p>
        <p>{{!$book->available ?"Emprestado" : "Disponivel"}}</p>
        <a href={{route('book.edit',$book->id)}}>Alterar</a>

        <form method="POST" enctype="multipart/form-data"
        action={{route('book.destroy',$book->id)}}>
        @csrf
        @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    </div>
    @endforeach --}}
</div>
@endsection()
