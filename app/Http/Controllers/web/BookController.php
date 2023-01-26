<?php

namespace App\Http\Controllers\web;


use App\Http\Controllers\Controller;
use App\Models\Book as ModelBook;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{

    public function index()
    {
        $books = ModelBook::with('genre')->get();
        return view('allBooks',[
            'books'=>$books
        ]);
    }


    public function create()
    {
        $genres = Genre::all();
        return view('createBook',[
            'genres'=>$genres
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'book_registration'=>'required|numeric|digits_between:5,10|unique:books,book_registration',
            'genre_id'=>'required|numeric|max:5',
            'available'=>'required',
            'book_name'=>'required|string|min:3|max:30',
            'author'=>'required|string|min:3|max:20',
        ]);

        ModelBook::create($input);
        return  Redirect::route('book.index')
        ->with('sucess',"Criado com sucesso");
    }

    public function show($id)
    {
        //
    }

    public function edit(ModelBook $book)
    {
        $book->with('genre')->find($book);
        $genres = Genre::all();
        return view('updateBook',[
            'book'=> $book,
            'genres'=>$genres
        ]);
    }

    public function update(Request $request, ModelBook $book)
    {

        $input = $request->validate([
            'genre_id'=>'required|numeric',
            'available'=>'required',
            'book_name'=>'required|string|min:3|max:20',
            'author'=>'required|string|min:3|max:20',
            'book_registration'=>'required|numeric|digits_between:5,10'
        ]);

        $book->fill($input);
        $book->save();
        return Redirect::route('book.index')
        ->with('sucess',"Alterado com sucesso");

    }

    public function destroy(ModelBook $id)
    {
        $id->delete();
        return Redirect::route('book.index')
        ->with('sucess','Deletado com sucesso');
    }
}
