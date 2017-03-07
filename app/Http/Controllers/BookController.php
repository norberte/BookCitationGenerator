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

        // removes all keys with values of null!
        $rm_null = array_filter( $input, 'strlen' );
        
        //need to stringify array
        $arr_tojson = json_encode($rm_null);

        $arr2_tojson = json_encode($input);


        // it was a pain to add json to the database anyways I have to create two queries first create the json then get the latest row and update the fields
        Book::create(['bookAttr'=>$arr_tojson,'fields'=>$arr_tojson]);
        DB::table('Book')
                ->latest()
                ->update($input);
        


         return redirect('/');

    }


   
    public function edit()
    {
        return view('/books/edit');
    }

    // this function updates books in the database
    public function update() {


         DB::table('book')->where('bid', request('bid'))->update([
             'title' => request('title'),
             'codeNum' => request('codeNum'),
             'authorLastName' => request('authorLastName'),
             'authorFirstName' => request('authorFirstName'),
             'illustratorFirstName' => request('illustratorFirstName'),
             'illustratorLastName' => request('illustratorLastName'),
             'translatorFirstName' => request('translatorFirstName'),
             'translatorLastName' => request('translatorLastName'),
             'publisher'=> request('publisher'),
             'copyright'=> request('copyright'),
             'isbn'=> request('isbn'),
             'createdBy'=> request('createdBy')
         ]);


       return view('/books/edit');

    }


}

