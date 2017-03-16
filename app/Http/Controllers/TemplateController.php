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
        return view('templates.create');
    }

    // TO DO: figure out how to add each position to the DB
    // the below store method is a placeholder
    public function store(){
        var_dump($_POST['template']);
    }

    public function edit($tname)
    {
        // get the template
        $template = DB::table('template')->select('position', 'attribute', 'attributeStyle', 'keyword', 'keywordStyle')->where('tname', '=', $tname)->get();

        // show the edit form and pass the template
        return view('nerds.edit')->with('nerd', $template);
    }

    // this function updates templates in the database
    public function update($tname, $pos) {
        DB::table('template')->where('tname', '=', $tname)->where('position', '=', $pos)->update([
            'keyword' => request('keyword'),
            'keywordStyle' => request('keywordStyle'),
            'attribute' => request('attribute'),
            'attributeStyle' => request('attributeStyle')
        ]);

        return view('/templates');
    }

/*
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'nerd_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nerds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = Nerd::find($id);
            $nerd->name       = Input::get('name');
            $nerd->email      = Input::get('email');
            $nerd->nerd_level = Input::get('nerd_level');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('nerds');
        }
    }
*/

    // delete template - COMPLETE
    public function destroy($templateName){
        DB::table('template')->where('tname', '=', $templateName)->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('templates');
    }

    // show a specific template - COMPLETE
    public function show($tname){
        $template = DB::table('template')->select('position', 'attribute', 'attributeStyle', 'keyword', 'keywordStyle')->where('tname', '=', $tname)->get();

        return view('templates.show', compact($template));
    }

    public function index(){
        // get all the nerds
        $templates = Template::all();

        // load the view and pass the nerds
        return view('templates.index')->with('templates', $templates);
    }
}
