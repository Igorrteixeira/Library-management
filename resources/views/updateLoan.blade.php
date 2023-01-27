@extends('layout.app')
@section('title','update loan')
@section('content')

@vite(['resources/css/createUser.css'])
<div >
    <form
    class="all-form"
    action={{route('loan.update',$loan->id)}} method="POST">
    @csrf
    @method('put')
            <h1>Alterar emprestimo</h1>
        <label for="user_registration">Registro do usuario</label>
            <input
            id="user_registration"
            type="text"
            placeholder="Digite o nome do cliente..."
            name="user_registration"
            value={{$loan->user->registration_number}}
            >
            @error('user_registration')
            <p class='erro' >{{$message}}</p>
            @enderror

        <label for="delivery_date">Data de entrega</label>
            <input
            type="date"
            name="delivery_date"
            value={{$loan->delivery_date}}
            >
            @error('delivery_date')
            <p class='erro' >{{$message}}</p>
            @enderror

        <label for="book_registration">Registro do livro</label>
        <input
        type="text"
        name="book_registration"
        value={{$loan->book->book_registration}}
        >
        @error('book_registration')
        <p class='erro' >{{$message}}</p>
        @enderror

        <div >
            <label for="late">Atrazado</label>
            <input
            type="radio"
            id="late"
            name="loan_status"
            value='Atrazado'
            id="Atrazado"
            >
            <label for="delivered">Entregue</label>
            <input
            type="radio"
            id="delivered"
            name="loan_status"
            value='Entregue'
            >
            <label for="on">Em dia</label>
            <input
            type="radio"
            id="on"
            name="loan_status"
            value="Em dia"
            checked
            >
        </div>


            <button type="submit">Alterar emprestimo</button>
        </form>

</div>
@endsection()
