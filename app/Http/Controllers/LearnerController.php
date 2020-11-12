<?php

namespace App\Http\Controllers;

use App\Learner;
use Illuminate\Http\Request;

class LearnerController extends Controller
{
    public function index(){
        $learners = Learner::join('users' , 'users.id','=', 'learners.user_id')
        ->select('users.lname', 'users.fname', 'learners.*')
        ->orderByRaw('lname', 'fname')->get();
        return view('learners.index', ['learners'=>$learners]);
    }
}