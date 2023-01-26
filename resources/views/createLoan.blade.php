@extends('layout.app')
@section('title','Create loan')
@section('content')

@vite(['resources/css/createUser.css'])

<div >
    <form action={{route('loan.store')}} method="POST">
    @csrf
            <h1>Novo emprestimos</h1>
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

        <label for="delivery_date">Data de entrega</label>
            <input
            type="date"
            name="delivery_date"
            value={{old('delivery_date')}}
            >
            @error('delivery_date')
            {{$message}}
            @enderror

            <button type="submit">Criar emprestimo</button>
        </form>

</div>
@endsection()
