@extends('layout.app')
@section('title','All Books')
@section('content')

<div>
    @include('components.message')
    <a class="create-new" href={{route('book.create')}}>Adicionar Livro</a>

    <form class="filter" action={{route('book.index')}} method="GET">
        <button name="search">Todos</button>
        @foreach ($genres as $genre)
        <button value={{$genre->id}} name="search">{{$genre->genre}}</button>
        @endforeach
    </form>

    <div class="cont-card">
    @foreach ($books as $book)
        <div class="card">
            <h4>{{$book->book_name}}</h4>
            <p>{{$book->author}}</p>
            <p>{{$book->genre->genre}}</p>
            <p>{{$book->book_registration}}</p>
            <p>{{!$book->available ?"Emprestado" : "Disponivel"}}</p>
            <div class="cont-button">
                <a class="update" href={{route('book.edit',$book->id)}}>Alterar</a>
                <form method="POST" enctype="multipart/form-data"
                action={{route('book.destroy',$book->id)}}>
                @csrf
                @method('DELETE')
                    <button class="delete" type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection()
