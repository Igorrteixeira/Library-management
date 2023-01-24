@extends('layout.app')
@section('title','Create user')
@section('content')

<div >
    <form action={{route('create.store')}} method="POST">
    @csrf
        <label for="name">Nome</label>
            <input
            type="text"
            placeholder="Digite o nome do cliente..."
            name="user_name"
            value={{old('user_name')}}
            >
            @error('user_name')
            {{$message}}
            @enderror

        <label for="email">Email</label>
            <input
            type="email"
            placeholder="Digite o email..."
            name="email"
            value={{old('email')}}
            >
            @error('email')
            {{$message}}
            @enderror

        <label for="registration_number">Numero de registro</label>
            <input
            type="text"
            placeholder="Digite o numero de registro..."
            name="registration_number"
            value={{old('registration_number')}}
            >
            @error('registration_number')
            {{$message}}
            @enderror

            <button>Criar usuario</button>
        </form>
</div>
@endsection()
