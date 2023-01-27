<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookFormRequest;
use App\Models\Book as ModelBook;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{

    public function index(Request $request)
    {
        $genres = Genre::all();
        $search = $request->search;
        $books = ModelBook::with('genre')
        ->where(function($query) use ($search){
            if($search) $query->where('genre_id',$search);
        })->get();

        return view('allBooks',[
            'books'=>$books,
            'genres'=>$genres
        ]);
    }

    public function create()
    {
        $genres = Genre::all();
        return view('createBook',[
            'genres'=>$genres
        ]);
    }

    public function store(BookFormRequest $request)
    {
        ModelBook::create($request->all());
        return  Redirect::route('book.index')
        ->with('sucess',"Criado com sucesso");
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

    public function update(BookFormRequest $request, ModelBook $book)
    {
        $book->fill($request->all());
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
