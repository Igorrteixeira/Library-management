@extends('layout.app')
@section('title','Create Book')
@section('content')

@vite(['resources/css/createUser.css'])

<div >
    <form class="all-form" action={{route('book.store')}} method="POST">
    @csrf
        <h1>Adicionar livro</h1>

            <label for="name">Nome</label>
                <input
                type="text"
                placeholder="Digite o nome do livro..."
                name="book_name"
                required
                value={{old('book_name')}}
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
                value={{old('author')}}
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
                value={{old('book_registration')}}
                >
                @error('book_registration')
                <p class='erro' >{{$message}}</p>
                @enderror
        

        <select name="available" >
            <option value=1>Disponivel</option>
            <option value=0>Emprestado </option>
        </select>

        <select name="genre_id" required >
            @foreach ($genres as $genre)
            <option
            value={{$genre->id}}>{{$genre->genre}}
            </option>
            @endforeach
        </select>
            <button type="submit">Adicionar livro</button>
        </form>
</div>
@endsection()
