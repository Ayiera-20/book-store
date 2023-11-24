<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookModel;
use App\Models\User;

class BooksController extends Controller
{
    // function createBook(Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'author'=>'required',
    //         'pages'=>'required',
    //         'IBN'=>'required',
    //         'category'=>'required',
    //         'publisher'=>'required',
    //         'yearofPublication'=>'required',
    //     ]);

    //     // creating our record
    //     $book =Book::create([
    //         'name' =>$request->name,
    //         'author' =>$request->author,
    //         'pages' =>$request->pages,
    //         'IBN' =>$request->IBN,
    //         'category' =>$request->category,
    //         'publisher' =>$request->publisher,
    //         'yearofPublication' =>$request->yearofPublication,

    //     ]);

    //     // retrieve the book and check if empty
    //     $book = Book::find($book->id);

    //     // we return a response-whether success or failure
    //     if(!$book){
    //         return response([
    //             'message'=>'unsuccessful!'
    //         ]);

    //     }else {
    //         return response([
    //             'messsage'=>'successful!',
    //             'book'=>$book
    //         ]);
    //     }

    // }
    public function index(){
        $users=User::all();
        return view('books',compact('users'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'pages' => 'required|integer',
            'IBN' => 'required|string',
            'category' => 'required|string',
            'publisher' => 'required|string',
            'yop' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        $book = new BookModel();
        $book->name =  $validatedData['name'];
        $book->pages =  $validatedData['pages'];
        $book->IBN =  $validatedData['IBN'];
        $book->category =  $validatedData['category'];
        $book->Publisher =  $validatedData['publisher'];
        $book->yearOfPublication =  $validatedData['yop'];
        $book->user_id =  $validatedData['user_id'];
        $book->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }


    
    //
}
