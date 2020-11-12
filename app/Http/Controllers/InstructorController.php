<?php

namespace App\Http\Controllers;

use App\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index(){
        $instructors = Instructor::join('users' , 'users.id', 'instructors.user_id')
            ->select('users.lname', 'users.fname', 'instructors.*')
            ->orderByRaw('lname', 'fname')->get();
            return view('instructors.index', ['instructors'=>$instructors]);
    }
}