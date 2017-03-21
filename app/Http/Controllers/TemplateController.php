<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Template;




class TemplateController extends Controller
{


    public function create()
    {
        return view('/templates/create');
    }

    // creates and adds a new template into the Database
    // COMPLETE
    public function store()
    {
        DB::table('template')->insert(
            ['tname' => request('tname'), 'content' => request('content')]
        );

        // redirect
        // Session::flash('message', 'Successfully added the template!');
        return view('/templates/index');
    }

    // shows the form for editing the specified template
    // COMPLETE
    public function edit($tname)
    {
        // get the template
        $template = DB::table('template')->select('content')->where('tname', '=', $tname)->get();

        // show the edit form and pass the template
        return view('/templates/edit/{tname}')->with('template', $template);
    }

    //  updates a specific template in the database
    // COMPLETE
    public function update($tname)
    {
        DB::table('template')->where('tname', '=', $tname)->update([
            'content' => request('content'),
        ]);

        // redirect
        // Session::flash('message', 'Successfully updated the template!');
        return view('/templates/index');
    }

    // deletes a specific template
    // COMPLETE
    public function destroy($tname)
    {



        DB::table('template')->where('tname','=', $tname)->delete();

        // redirect
        // Session::flash('message', 'Successfully deleted the template!');
        return view('/templates/index');
    }

    // shows a specific template
    // COMPLETE
    public function show($tname)
    {
        $template = DB::table('template')->select('tname')->where('tname', '=', $tname)->get();

        return view('/templates/show')->with('template', $template);
    }

    // shows all templates
    // COMPLETE
    public function index()
    {
        //$templates = Template::all();


        // load the view and pass all templates
        return view('/templates/index');
    }

    public function view(){
        return view('/templates/index');
    }

    public function templateview(){
        return view('/scripts/templateview');
    }



}
