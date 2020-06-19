<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function index()
    {
//        DB::insert('insert into students (name,sex,dob,address,description)
//        value(?,?,?,?,?)',[
//            'Dara','Male','1999-12-12','Phnom Penh','This is Dara',
//            ]);

//        DB::update('update students set description=? where id=1', ['Dara is updated']);

//        DB::delete('delete from students where id=1');
//
//        $students=DB::select('select * from students');
//        return $students;

//        $student=new Student();
//        $student->name='Bora';
//        $student->sex='Male';
//        $student->save();

//        $student=Student::all();
//        return $student;

//        Student::where('id',2)->delete();

        $data=[
            'name'=>'bondol',
            'sex'=>'Male',
            'dob'=>'2010-11-12',
            'address'=>'Kandal',
            'description'=>'Battambang province',
        ];
        Student::create($data);

        $student=Student::all();
        return $student;

        return view('home');
    }
}
