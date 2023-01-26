@extends('layout.app')
@section('title','Create Book')
@section('content')

@vite(['resources/css/createUser.css'])

<div >
    <form action={{route('book.store')}} method="POST">
    @csrf
        <h1>Adicionar livro</h1>
        <div>
            <label for="name">Nome</label>
                <input
                type="text"
                placeholder="Digite o nome do livro..."
                name="book_name"
                required
                value={{old('book_name')}}
                >
                @error('book_name')
                {{$message}}
                @enderror
        </div>

        <div>
            <label for="author">Autor</label>
                <input
                type="text"
                placeholder="Digite o nome do autor..."
                name="author"
                required
                value={{old('author')}}
                >
                @error('author')
                {{$message}}
                @enderror
        </div>

        <div>
            <label for="book_registration">Numero de registro</label>
                <input
                type="text"
                placeholder="Minimo 5 digitos..."
                name="book_registration"
                required
                value={{old('book_registration')}}
                >
                @error('book_registration')
                {{$message}}
                @enderror
        </div>

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
