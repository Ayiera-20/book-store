<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\User;

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
        $users=User::all();
        return view('books',compact('users'));
    }
    public function store(Request $request){
        $validateData = $request([
            'name'=>'required|string|max:255',
            'pages'=>'required|integer',
            'IBN'=>'required',
            'category'=>'required',
            'publisher'=>'required',
            'yearOfPublication'=>'required',
            'user_id'=>'required',
        ]);
        $book= new Books();
        $book->name = $validateData ['name'];
        $book->pages = $validateData ['pages'];
        $book->IBN = $validateData ['IBN'];
        $book->category = $validateData ['category'];
        $book->publisher = $validateData ['publisher'];
        $book->yearOfPublication = $validateData ['yearOfPublication'];
        $book->user_id = $validateData ['user_id'];
        $book->save();

        return redirect()->back()->with('Success','Data Added Successfully');

    }


    
    //
}
