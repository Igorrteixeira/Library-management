@extends('layout.app')
@section('title','All Books')
@section('content')

<div>
    @include('components.message')
    <a href={{route('book.create')}}>Adicionar Livro</a>

    <form action={{route('book.index')}} method="GET">
        <button name="search">Todos</button>
        @foreach ($genres as $genre)
        <button value={{$genre->id}} name="search">{{$genre->genre}}</button>
        @endforeach
    </form>

    @foreach ($books as $book)
    <div>
        <p>{{$book->book_name}}</p>
        <p>{{$book->author}}</p>
        <p>{{$book->genre->genre}}</p>
        <p>{{$book->book_registration}}</p>
        <p>{{!$book->available ?"Emprestado" : "Disponivel"}}</p>
        <a href={{route('book.edit',$book->id)}}>Alterar</a>

        <form method="POST" enctype="multipart/form-data"
        action={{route('book.destroy',$book->id)}}>
        @csrf
        @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    </div>
    @endforeach
</div>
@endsection()
