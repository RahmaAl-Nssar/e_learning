<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz;
use App\Models\QuizStudent;
use App\Models\Answer;
use Carbon\Carbon;

class QuizController extends Controller
{
    public function enloe($id){
        DB::beginTransaction();
        try{
        $quiz = Quiz::findOrFail($id);
        $questions = $quiz->questions;
       
        $user = auth()->user();
        $student_id = $user->student->id;
        $enrolled = null;
        $is_available = true;
        if($quiz->published == 0){
            return abort(404);
        }
        
        
        $defaultEndsAt = Carbon::now()->addMinutes($quiz->duration);  //نهاية الكويز هو وقت دخول الكويز + مدة الكويز 
        $expires_at = $quiz->expires_at;
        if($defaultEndsAt->gt($expires_at)){
            
            $ends_at = $expires_at->toDateTimeString(); //بحال مثلا الطالب دخل الساعة 11:40 دقيقة ومدة الكويز هيي نصف ساعة يعني الطالب بالتالي حيحتاج يبقى لل 12:20 وصلاحية الكويز هيي لل12 لهيك لازم اخد اول مرة انو نهاية الكويز مع نهاية صلاحيتو
        }
        else{
            $ends_at = $defaultEndsAt;
        }
        $quiz_student = QuizStudent::where('quiz_id',$quiz->id)->where('student_id',$student_id)->first();
       
        if($quiz_student == null){
            QuizStudent::create([
                'quiz_id'=>$id,
                'student_id'=>auth()->user()->student->id,
                'ends_at'=>$ends_at
            ]);
          
            
                
        }
        
        elseif($quiz_student != null && $quiz_student->finished == 1){
            if($quiz_student ->ends_at > $ends_at || Carbon::now() > $quiz_student ->ends_at){
            $is_available = false;
            
            }
        }
        
        DB::commit();
        return view('students.enroll',compact('quiz','ends_at','questions','is_available','enrolled'));
        }catch(\Exception $e){
            return response()->json(['message'=>$e->getMessage(),'alert_type'=>'error']);
        }
    }

    public function submit(Request $request,$id){
        DB::beginTransaction();
        try{
        $quiz = Quiz::findOrFail($id);
        $user = auth()->user();
        $student = $user->id;
        $quiz_student = QuizStudent::where('student_id',$student)->where('quiz_id',$quiz->id)->first();
        
        for($i = 0; $i<$request->num_of_questions; $i++){
            $answers[] = $request['answer_' . $i];
        }
        foreach($answers as $answer){
            $ans = Answer::where('id',$answer)->first();
            
            if($ans->is_correct == 1){
                $quiz_student->update([
                'result'=>$ans->question->full_mark,
                'finished'=>1,
            ]);
           
            }
            else{
                $quiz_student->update([
                    'result'=>0,
                    'finished'=>1,
                ]);
            }
        }
        DB::commit();
        return redirect()->route('home');
        toast('finished quiz','success');
        }catch(\Exception $e){
            return response()->json(['message'=>$e->getMessage(),'alert_type'=>'error']);
        }


    }

    public function show($id){
        $quiz = Quiz::findOrFail($id);
        $questions = $quiz->questions;
        return view('students.show',compact('quiz','questions'));
    }
}
