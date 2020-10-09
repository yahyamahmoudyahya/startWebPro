<?php

namespace App\Http\Controllers;

use App\Phone;
use App\School;
use App\Student;
use Illuminate\Http\Request;

class StoreStudent extends Controller
{
    public function store(Request $request){
        $school_id =0;

        if (!($request->name_school == null) && !($request->address_school == null)){
            $school = School::create([
                'name'=> $request->name_school,
                'address'=> $request->address_school,
            ]);
            $school_id = $school->id;
        }

        if ($school_id == 0){
            $student = Student::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=>$request->password,
                'school_id'=>0
            ]);
        }else{
            $student = Student::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=>$request->password,
                'school_id'=>$school_id
            ]);
        }

        if (!($request->code == null) && !($request->phone == null)){
            Phone::create([
                'code'=> $request->code,
                'phone'=> $request->phone,
                'student_id'=> $student->id
            ]);
        }




        return 'saved successful';
    }
    public function creat(){
        return view('student');
    }
    public function demo(){
        ####################################### One To One ################################

        $student1 = Student::with(['phone'=>function($q){
            $q->select('code','student_id'); //student_id is verey important
        }])->get();

        ##################################

        $phone1 = Phone::with(['student'=>function($q){
            $q->select('id','name');  //id is verey important
        }])->get();

        ##################################

        $student2 = Student::with('phone')->get();

        ##################################

        $phone = Phone::find(1);
        $student3 = $phone->student;

        ##################################

        $phone2 = Phone::with('student')->get();

        ##################################

        $studentHasPhone = Student::wherehas('phone')->get();   //get users when having phone

        ##################################

        $studentHasPhone = Student::wheredoesnthave('phone')->get();   //get users when haven't phone

        ####################################### One To Many ################################

        $school1 = School::with(['student'=>function($q){
            $q->select('name','school_id'); //student_id is verey important
        }])->get();

        ##################################

        $studentHasSchool = Student::wherehas('school')->get();

        ##################################

        $studentdoesnthaveSchool = Student::wheredoesnthave('school')->get();


        return $studentdoesnthaveSchool;

    }
}
