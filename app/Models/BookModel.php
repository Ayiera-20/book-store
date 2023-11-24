<?php

namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;
    protected $table = 'book_migration';


    protected $fillable = [
        'name',
        'pages',
        'IBN',
        'category',
        'publisher',
        'yearOfPublication',
        'user_id',
        // Add other fields as needed
    ];


    public function user(){
        return this->belongsTo(User::class);
    }
       
    
}
