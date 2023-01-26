<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Book as ModelBook;
use App\Models\BookLoan as ModelLoan;
use App\Models\User as ModelUser;
use Error;
use Exception;
use Illuminate\Auth\Events\Validated;
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

        $input = $request->validate([
            'user_registration'=>'required|',
            'book_registration'=>'required',
            'delivery_date'=>'date|required',
        ]);

        $user = ModelUser::where('registration_number',$input['user_registration'])->first();
        
        $book = ModelBook::where('book_registration',$input['book_registration'])->first();

        dd($book->id);
        // ModelLoan::created([
        //     'user_id'=>$user->id,
        //     'book_id'=>$book->id,
        //     'delivery_date'=>$input['delivery_date'],
        //     "loan_status"=>false
        // ]);

        // $book->available = false;
        // $book->refresh();

        // return Redirect::route('loan.index')
        // ->with('sucess',"Criado com sucesso");

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
