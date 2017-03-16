<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App;



class changePassword extends Controller
{
    //
    public function index()
    {

        return view('auth.changePassword');

    }

    // this will update the password in the database with a new hashed one
    public function update(Request $request)
    {

        // retrieves the password entered
        $oldpassword = $_POST["oldpassword"];

        // retrieves the new password
        $newpassword1 = $_POST['newpassword1'];

        //retrieves the second password
        $newpassword2 = $_POST['newpassword2'];

        // retrieves old password from database
        $password = App\User::value('password');


        // this if statement will check if the old password matches what is in the database.
        // this will also check if the two new passwords are eqvuilant
        // if both conditions pass, the new password will be hashed in the database
        if ((Hash::check($oldpassword, $password)) && ($newpassword1 == $newpassword2)) {

            $request->user()->fill([
                'password' => Hash::make($request->newPassword)
            ])->save();
            echo '<script language="javascript">';
            echo 'alert("Password changed!")';
            echo '</script>';

        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Incorrect Password. Please try again.")';
            echo '</script>';
        }

        return view('/auth/changePassword');
    }
}
