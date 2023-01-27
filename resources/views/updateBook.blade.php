@extends('layout.app')
@section('title','Update Book')
@section('content')

@vite(['resources/css/createUser.css'])

<div >
    <form class="all-form"
    method="POST"
    enctype="multipart/form-data"
    action={{route('book.update', $book->id)}}
    >
    @csrf
    @method('put')

        <h1>Alterar livro</h1>

            <label for="name">Nome</label>
                <input
                type="text"
                placeholder="Digite o nome do livro..."
                name="book_name"
                required
                value={{$book->book_name}}
                >
                @error('book_name')
                <p class='erro' >{{$message}}</p>
                @enderror
        


            <label for="author">Autor</label>
                <input
                type="text"
                placeholder="Digite o nome do autor..."
                name="author"
                required
                value={{$book->author}}
                >
                @error('author')
                <p class='erro' >{{$message}}</p>
                @enderror
        


            <label for="book_registration">Numero de registro</label>
                <input
                type="text"
                placeholder="Minimo 5 digitos..."
                name="book_registration"
                required
                value={{$book->book_registration}}
                >
                @error('book_registration')
                <p class='erro' >{{$message}}</p>
                @enderror
        

        <select name="available" >
            <option value=0>Emprestado </option>
            <option value=1>Disponivel</option>
        </select>

        <select name="genre_id" required >
            <option value={{$book->genre->id}}>{{$book->genre->genre}}</option>
            @foreach ($genres as $genre)
            @if ($genre->genre !== $book->genre->genre)
            <option
            value={{{$genre->id}}}><p>{{$genre->genre}}</p>
            </option>
            @endif
            @endforeach
        </select>
            <button type="submit">Aterar livro</button>

        </form>
</div>
@endsection()
