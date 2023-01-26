<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\BookLoan as ModelLoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoanController extends Controller
{

    public function index()
    {
        $loans = ModelLoan::all();
        return view('allLoan',[
            'loans'=>$loans
        ]);
    }

    public function create()
    {
        return view('createLoan');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $id->delete();
        return Redirect::route('loan.index')
        ->with('sucess','Deletado com sucesso');
    }
}
