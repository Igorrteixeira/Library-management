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
        return view('createUser');
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'user_name'=>'required|string|min:3|max:40',
            'registration_number'=>'required|min:5|max:6|',
            'email'=>'required|email:rfc,dns|unique:users,email'
        ]);
        ModelsUser::create($input);
        return  Redirect::route('user');

    }

    public function show($id)
    {
         return ModelsUser::findOrFail($id);

    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user = ModelsUser::findOrFail($id);
        $user->fill($request);
        $user->save();
        return  Redirect::route('create.create');

    }


    public function destroy($id)
    {
        $user = ModelsUser::findOrFail($id);
        $user->delete();
        return Redirect::route('create.user');
    }
}