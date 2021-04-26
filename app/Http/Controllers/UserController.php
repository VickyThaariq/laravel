<?php

namespace App\Http\Controllers;

class UserController extends Controllers{

    public function login( Request $request ){
        $username=$request->post ('username');
        $password=$request->post ('password');

        if ($username) != 'admin'
    }
}