<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // GET /books
    public function index(){
    
        return 'View all the books...';
    }

    //GET /books/{$title?}
    public function view($title = null){
        # query the database for all books that match the title

        # return the book
        return 'You want to view the book '.$title;
    }
}
