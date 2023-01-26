<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $input = $request->validate([
            'user_name'=>'required|string|min:3|max:40',
            'registration_number'=>'required|min:5|max:6|',
            'email'=>'required|email:rfc,dns|unique:users,email'
        ]);
        ModelsUser::create($input);
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

    public function update(Request $request, ModelsUser $user)
    {
        $input = $request->validate([
            'user_name'=>'required|string|min:3|max:40',
            'registration_number'=>'required|min:5|max:6|',
            'email'=>'required|email:rfc,dns'
        ]);
        $user->fill($input);
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
