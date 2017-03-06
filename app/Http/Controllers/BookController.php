<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Request;


use App\Book;

class BookController extends Controller
{
     public function create()
    {
    	$attributes = [
    	'title',
    	'codeNum',
    	'authorLastName',
    	'authorFirstName',
    	'illustratorFirstName',
    	'illustratorLastName',
    	'translatorFirstName',
    	'translatorLastName',
    	'publisher',
    	'copyright',
    	'isbn',
    	'createdBy'];

    	return view('/books/create',compact('attributes'));
    }

    public function store()
    { 	
    	
    	// Create a new book using the request data
    	//Save it to the database
        $input =Request::except('_token');
       
        $arr_tojson = json_encode($input);

        $arr2_tojson = json_encode($input);
        
        Book::create(['bookAttr'=>$arr_tojson]);
        Book::create(['fields'=>$arr_tojson]);
        
        

        DB::table('book')->insert(

            [      
                     $input
      
            ]
            );



    	
        //redirects to same page for now.
         return redirect('/');

    }
}