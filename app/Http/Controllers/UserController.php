<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dangKi(){
        return view('user.dangki');
    }
    function xuLiDangKi(Request $request){
        $firstName = $request->get('firstname');
        $lastName = $request->get('lastname');
        $country = $request->get('country');
        return $firstName. ' '. $lastName . ' ' . $country;
    }
    public function login(Request $request){
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        return sprintf('welcome to admin page %s , email %s, password %s',$name ,$email, $password);
    }
    public function getUserDetail ($id){
        return 'hello path' . $id;
    }

}
