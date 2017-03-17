<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('bookcollections.index',compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
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
        //
    }
}
