<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoanFormRequest;
use App\Models\Book as ModelBook;
use App\Models\BookLoan as ModelLoan;
use App\Models\User as ModelUser;
use Illuminate\Support\Facades\Redirect;

class LoanController extends Controller
{

    public function index()
    {
        $loans = ModelLoan::with('book','user')->get();
        return view('allLoan',[
            'loans'=>$loans
        ]);
    }

    public function create()
    {
        return view('createLoan');
    }

    public function store(LoanFormRequest $request)
    {
        $user = ModelUser::where('registration_number',$request['user_registration'])->first();
        $book = ModelBook::where('book_registration',$request['book_registration'])->first();

        ModelLoan::create([
            'user_id'=>$user->id,
            'book_id'=>$book->id,
            'delivery_date'=>$request['delivery_date'],
        ]);

        $book->available = 0;
        $book->save();
        return Redirect::route('loan.index')
        ->with('sucess',"Criado com sucesso");
    }

    public function edit(ModelLoan $loan)
    {
        $loan->with('user','book')->find($loan);
        return view('updateLoan',[
            'loan'=>$loan
        ]);
    }

    public function update(LoanFormRequest $request, ModelLoan $loan)
    {
        $user = ModelUser::where('registration_number',$request['user_registration'])->first();
        $book = ModelBook::where('book_registration',$request['book_registration'])->first();
        $loan->user_id = $user->id;
        $loan->book_id = $book->id;
        $loan->delivery_date = $request['delivery_date'];
        $loan->loan_status = $request['loan_status'];
        $loan->save();
        return Redirect::route('loan.index')
        ->with('sucess',"Alterado com sucesso");
    }

    public function destroy(ModelLoan $id)
    {
        $id->delete();
        return Redirect::route('loan.index')
        ->with('sucess','Deletado com sucesso');
    }
}
