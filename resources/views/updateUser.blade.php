@extends('layout.app')
@section('title','Update user')
@section('content')

@vite(['resources/css/createUser.css'])

<div >

    <form
    method="POST"
    enctype="multipart/form-data"
    action={{route('user.update',$user->id)}}
     >
    @csrf
    @method('put')
      <h1>Update User</h1>
        <label for="name">Nome</label>
            <input
            type="text"
            placeholder="Digite o nome do cliente..."
            name="user_name"
            value={{$user->user_name}}
            >
            @error('user_name')
            {{$message}}
            @enderror

        <label for="email">Email</label>
            <input
            type="email"
            placeholder="Digite o email..."
            name="email"
            value={{$user->email}}
            >
            @error('email')
            {{$message}}
            @enderror

        <label for="registration_number">Numero de registro</label>
            <input
            type="text"
            placeholder="Digite o numero de registro..."
            name="registration_number"
            value={{$user->registration_number}}
            >
            @error('registration_number')
            {{$message}}
            @enderror

            <button type="submit">Alterar usuario</button>
        </form>

</div>
@endsection()
