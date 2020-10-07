<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function view(){
        return 'view';
    }
    public function edit(){
        return 'edit';
    }
    public function delete(){
        return 'delete';
    }
    public function create(){
        return 'create';
    }
    public function index(){
        $data=Student::all();
        return view('welcome',compact('data'));
    }
}
