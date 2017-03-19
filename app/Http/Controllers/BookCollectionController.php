<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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
        //$result= array();
        //$specificcol=array();
        //$allbooks=array();
        $collections = bookcollection::all();
        //$books = bookcollection::with('books')->get()->toArray();
        //$test = collect($books)->pluck('books')->toArray(); 
        //$result[] = bookcollection::find($i)->books->toArray();
         
         /*for($i = 1; $i<=sizeof($collections);  $i++){
            
            ${'result'.$i}=array();
            ${'result'.$i} = bookcollection::find($i)->books->toArray();
           
            //$specificcol[] = bookcollection::find($i)->books->toArray();

           
            
            foreach(${'result'.$i} as $key=> $val){

                ${'title'.$i}[] = $val['title'];

            }
           if(!empty(${'result'.$i})){
            array_push($allbooks,${'title'.$i});

           }
           
            dd($allbooks);       
                    
            
        }*/

        //dd($allbooks);

        //dd($allbooks);
        
        
       
        /* foreach($test as $outer)
         {
            foreach($outer as $key=>$val)
                {
                    $result2[]=$val['title'];
                }

         }
         */
        /*$test2=collect($books)->pluck('books');
        dd($result1);*/
        //dd(sizeof($collections));
        //$chunks =  $test->collapse();
        //$flatcheck = $test->flatten(1);
        //$keys=$flatcheck->keys();
        //dd($test);
        //dd($result2);
        //dd($specificcol);
        //
        //dd($books);
        //dd($result);
        //
        //dd($books);
        //dd($keys);
        //dd($flatcheck);
        //dd($test);
        //dd($books);


        return view('bookcollections.index',
        compact('collections'));
        
    
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
        //in front end name="book_id[]""
        $bookcollection = new bookcollection;

        $bookcollection->cname = $request->cname;
        
        $bookcollection->save();

        $bookcollection->books()->sync($request->books,false);


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
        //
    }
}
