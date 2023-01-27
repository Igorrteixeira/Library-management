<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserUpdateFormRequest;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function index()
    {
        $users = ModelsUser::all();
        return view('allUsers',[
            'users'=>$users
        ]);
    }

    public function create()
    {
        return view('createUsers');
    }

    public function store(UserFormRequest $request)
    {
        ModelsUser::create($request->all());
        return  Redirect::route('user.index')
        ->with('sucess',"Criado com sucesso");
    }

    public function show($id)
    {
         return ModelsUser::findOrFail($id);

    }

    public function edit(ModelsUser $user)
    {
        return view('updateUser',[
            'user'=> $user
        ]);
    }

    public function update(UserUpdateFormRequest $request, ModelsUser $user)
    {
        $user->fill($request->all());
        $user->save();
        return  Redirect::route('user.index')
        ->with('sucess',"Alterado com sucesso");

    }

    public function destroy(ModelsUser $id)
    {
        $id->delete();
        return Redirect::route('user.index')
        ->with('sucess',"Deletado com sucesso");
    }
}
