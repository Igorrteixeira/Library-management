@extends('layout.app')
@section('title','All Loans')
@section('content')

<div>
    <a href={{route('loan.create')}}>Emprestimos</a>
    @include('components.message')

    @foreach ($loans as $loan)
    <div>
        <p>{{$loan->delivery_date}}</p>

        {{-- <a href={{route('book.edit',$book->id)}}>Alterar</a>

        <form method="POST" enctype="multipart/form-data"
        action={{route('book.destroy',$book->id)}}>
        @csrf
        @method('DELETE')
            <button type="submit">Delete</button>
        </form> --}}

    </div>
    @endforeach
</div>
@endsection()
