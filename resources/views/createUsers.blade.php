@extends('layout.app')
@section('title','Create user')
@section('content')

<div >
    <form class="all-form" action={{route('user.store')}} method="POST">
    @csrf
            <h1>Criar User</h1>
        <label for="name">Nome</label>
            <input
            type="text"
            placeholder="Digite o nome do cliente..."
            name="user_name"
            value={{old('user_name')}}
            >
            @error('user_name')
            <p class='erro' >{{$message}}</p>
            @enderror

        <label for="email">Email</label>
            <input
            type="email"
            placeholder="Digite o email..."
            name="email"
            value={{old('email')}}
            >
            @error('email')
            <p class='erro' >{{$message}}</p>
            @enderror

        <label for="registration_number">Numero de registro</label>
            <input
            type="text"
            placeholder="Digite o numero de registro..."
            name="registration_number"
            value={{old('registration_number')}}
            >
            @error('registration_number')
            <p class='erro' >{{$message}}</p>
            @enderror

            <button>Criar usuario</button>
        </form>

</div>
@endsection()
