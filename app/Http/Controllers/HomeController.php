<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Carbon\Carbon;
use App\Models\QuizStudent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        if($user->role == 'teacher'){
            return view('teachers.teacher-home',compact('user'));
        }else{
            $student = $user->student;
           
            $quizzes = Quiz::with('subject')->where('level_id',$student->level_id)->where('published',1)
            ->whereDate('expires_at','>',Carbon::now()->toDateTimeString())
            ->latest()->paginate(12);
            
            return view('students.student-home',compact('quizzes','student'));
        }
        
    }
}
