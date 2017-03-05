<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

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

        DB::table('book')->insert(

                [
        'title' => request('title'),
        'codeNum' => request('codeNum'),
        'authorLastName' => request('authorLastName'),
        'authorFirstName' => request('authorFirstName'),
        'illustratorFirstName' => request('illustratorFirstName'),
        'illustratorLastName' => request('illustratorLastName'),
        'translatorFirstName' => request('translatorFirstName'),
        'translatorLastName' => request('translatorLastName'),
        'publisher'=> request('publisher'),
        'copyright'=> request('copyright') ,
        'isbn'=> request('isbn'),
        'createdBy'=> request('createdBy')]
            );
    	
        //redirects to same page for now.
         return redirect('/');

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
