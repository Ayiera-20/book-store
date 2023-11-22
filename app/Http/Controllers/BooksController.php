<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BooksController extends Controller
{
    function createBook(Request $request){
        $request->validate([
            'name'=>'required',
            'author'=>'required',
            'pages'=>'required',
            'IBN'=>'required',
            'category'=>'required',
            'publisher'=>'required',
            'yearofPublication'=>'required',
        ]);

        // creating our record
        $book =Book::create([
            'name' =>$request->name,
            'author' =>$request->author,
            'pages' =>$request->pages,
            'IBN' =>$request->IBN,
            'category' =>$request->category,
            'publisher' =>$request->publisher,
            'yearofPublication' =>$request->yearofPublication,

        ]);

        // retrieve the book and check if empty
        $book = Book::find($book->id);

        // we return a response-whether success or failure
        if(!$book){
            return response([
                'message'=>'unsuccessful!'
            ]);

        }else {
            return response([
                'messsage'=>'successful!',
                'book'=>$book
            ]);
        }

    }
    public function index(){
        return view('books');
    }
    public function store(Request $request){
        $validateData = $request([
            'name'=>'require|string|max:255',
            'pages'=>'required|integer',
            'IBN'=>'required',
            'category'=>'required',
            'publisher'=>'required',
            'yearOfPublication'=>'required',
            'user_id'=>'required',
        ]);
    }


    
    //
}
