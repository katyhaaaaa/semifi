<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::get();
        return view('courses.index', ['courses'=>$courses]);
    }
}
