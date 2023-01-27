@extends('layout.app')
@section('title','All Loans')
@section('content')

<div>
    <a class='create-new' href={{route('loan.create')}}>Adicionar emprestimo</a>
    @include('components.message')

    <div class="cont-card">
        @foreach ($loans as $loan)
        <div class="card">
            <p>Livro: {{$loan->book->book_name}}</p>
            <p>Usuario: {{$loan->user->user_name}}</p>
            <p>Data de entrega: {{$loan->delivery_date}}</p>
            <p>{{$loan->loan_status}}</p>
            <div class="cont-button">
                <a class="update" href={{route('loan.edit',$loan->id)}}>Alterar</a>
                <form method="POST" enctype="multipart/form-data"
                action={{route('loan.destroy',$loan->id)}}>
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
