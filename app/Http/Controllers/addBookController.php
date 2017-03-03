<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addBookController extends Controller
{
    public function index()
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

    	return view('/layouts/create',compact('attributes'));
    }
}
