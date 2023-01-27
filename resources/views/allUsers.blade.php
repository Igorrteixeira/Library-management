@extends('layout.app')
@section('title','All user')
@section('content')

<div>
    @include('components.message')
    <a class="create-new" href={{route('user.create')}}>Adicionar usuario</a>
    <div class="cont-card">
        @foreach ($users as $user)
        <div class="card">
            <h4>{{$user->user_name}}</h4>
            <p>{{$user->email}}</p>
            <p>{{$user->registration_number }}</p>
            <div class="cont-button">
                <a class="update"href={{route('user.edit',$user->id)}}>Alterar</a>
                <form method="POST" enctype="multipart/form-data" action={{route('user.destroy',$user->id)}}>
                @csrf
                @method('DELETE')
                    <button  class="delete" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection()
