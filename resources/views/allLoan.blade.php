@extends('layout.app')
@section('title','All Loans')
@section('content')

<div>
    <a href={{route('loan.create')}}>Emprestimos</a>
    @include('components.message')

    @foreach ($loans as $loan)
    <div>
        <p>Livro: {{$loan->book->book_name}}</p>
        <p>Usuario: {{$loan->user->user_name}}</p>
        <p>Data de entrega: {{$loan->delivery_date}}</p>

        <a href={{route('loan.edit',$loan->id)}}>Alterar</a>
        <form method="POST" enctype="multipart/form-data"
        action={{route('loan.destroy',$loan->id)}}>
        @csrf
        @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    </div>
    @endforeach
</div>
@endsection()
