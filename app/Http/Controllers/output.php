<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class output extends Controller
{


    public function index(){

        return view('/output');

    }



    public function write() {

        $intodatabase = $_POST["title"];

        \DB::table('output')->insert(
            ['list' => $intodatabase]
        );

        return redirect('/outputHTML');

    }

    public function read(){



        return view('/outputHTML');

    }
}
