<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudents(){
        return Student::all();

    }
    public function addStudent(){
        $student = new Student;

        $student->name = "bela";
        $student->phone = "123456789";

        $student->save();
    }
}
