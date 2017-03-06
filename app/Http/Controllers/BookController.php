<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use Request;
||||||| 5ece176... Merging into development with search functionality connected
use Illuminate\Http\Request;
=======

use Illuminate\Http\Request;

>>>>>>> parent of 5ece176... Merging into development with search functionality connected
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
<<<<<<< HEAD
||||||| 5ece176... Merging into development with search functionality connected
    {
=======
    { 	
    	
    	// Create a new book using the request data
    	//Save it to the database
>>>>>>> parent of 5ece176... Merging into development with search functionality connected

<<<<<<< HEAD
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
       /* Book::create(['fields'=>$arr_tojson]);
        
        
||||||| 5ece176... Merging into development with search functionality connected
        // Create a new book using the request data
        //Save it to the database
=======
>>>>>>> parent of 5ece176... Merging into development with search functionality connected
        DB::table('book')->insert(
<<<<<<< HEAD
            [        
                     'bookAttr'=>$arr_tojson,
                     'fields'=>$arr_tojson,
                     $input
      
            ]
            );*/
||||||| 5ece176... Merging into development with search functionality connected
            [
                'title' => request('title'),
                'codeNum' => request('codeNum'),
                'authorLastName' => request('authorLastName'),
                'authorFirstName' => request('authorFirstName'),
                'illustratorFirstName' => request('illustratorFirstName'),
                'illustratorLastName' => request('illustratorLastName'),
                'translatorFirstName' => request('translatorFirstName'),
                'translatorLastName' => request('translatorLastName'),
                'publisher' => request('publisher'),
                'copyright' => request('copyright'),
                'isbn' => request('isbn'),
                'createdBy' => request('createdBy')]
        );
=======
>>>>>>> parent of 5ece176... Merging into development with search functionality connected

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

<<<<<<< HEAD
    public function edit()
    {
||||||| 5ece176... Merging into development with search functionality connected
    public function edit(){
=======
    // this function updates books in the database
    public function update() {
>>>>>>> parent of 5ece176... Merging into development with search functionality connected

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


<<<<<<< HEAD
}

||||||| 5ece176... Merging into development with search functionality connected
}
=======


}
>>>>>>> parent of 5ece176... Merging into development with search functionality connected
