@extends('layout.app')
@section('title','All user')
@section('content')

<div>


    @foreach ($users as $user)
    <div>
        <p>{{$user->user_name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->registration_number }}</p>

        <a href={{route('user.edit',$user->id)}}>Alterar</a>

        <form method="POST" enctype="multipart/form-data" action={{route('user.destroy',$user->id)}}>
        @csrf
        @method('DELETE')
            <button type="submit">Delete</button>
        </form>

        @include('components.message')
        


    </div>
    @endforeach
</div>





@endsection()
