<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function create (){
        return view('admin.teacher.create');
    }
    function view (){
        return view('admin.teacher.view');
    }
    function update (){
        return view('admin.teacher.updateList');
    }
    function Delete (){
        return view('admin.teacher.Delete');
    }
    function getList (){
        return view('admin.teacher.getList');
    }
    function getById(){
        return view('admin.teacher.getById');
    }
}
