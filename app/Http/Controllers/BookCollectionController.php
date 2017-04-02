<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\bookcollection;

class BookcollectionController extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
    
        $collections = bookcollection::all();

        return view('bookcollections.index',
        compact('collections'));
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    

        
        //in front end name="book_id[]""
        $bookcollection = new bookcollection;

        $bookcollection->cname = $request->cname;
        
        $bookcollection->save();
        
        /*set to false so I dont overwrite existing relationships.this adds the book array of ids and associates it with the corresponding request cname*/
        $bookcollection->books()->sync($request->books,false);

        Session::flash('message', 'Successfully created collection!');

        return redirect('/home');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $collection = bookcollection::find($id);
       /*get all books associated with collection*/
        $books = bookcollection::find($id)->books;

        return view('bookcollections.edit',compact('collection','books'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(bookcollection $bookcollection)
    {    
        /*Thanks to route model binding and resourceful controllers I no longer need the commented out line of code if I wanted to use the uncommented line. I'd have to change the parameter back to edit($id)*/
         
         /* $collection = bookcollection::find($id);*/
         //$bookcollections = bookcollection::find($bookcollection);
         //$bookcollections->books()->detach(1);
          /*code for deleting a bookcollection or book from a book collection!*/

        $books = $bookcollection->books;

        return view('bookcollections.edit',compact('bookcollection','books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookcol = bookcollection::find($id);
        $bookcol->delete();
        Session::flash('message', 'Successfully deleted collection!');

        return redirect('/bookcollections');
    }

    public function search(){

        return view ('templates/template/search');

    }


}
