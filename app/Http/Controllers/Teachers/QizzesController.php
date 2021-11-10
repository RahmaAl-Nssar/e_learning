<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\QuizeRequest;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Quiz;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ResultExport;

class QizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
        if(request()->ajax()){
            $quizzes = Quiz::paginate(10);
            return view('teachers.quizzes.table',compact('quizzes'));
           
        }else{
            $user = User::where('id',auth()->id())->first();
            return view('teachers.quizzes.index',compact('user'));
        }
        } catch(\Exception $e){
            return response()->json(['message' => $e->getMessage(), 'alert_type' => 'error']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::select('id','name')->get();
        
        return view('teachers.quizzes.form-tag',compact('levels'));
    }

    public function get_subjects($id){
        $subjects = Subject::where('level_id',$id)->select('id','name')->get();
        return $subjects;
    }

    public function publishedStatus($id){
        $quiz = Quiz::where('id',$id);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuizeRequest $request)
    {
       DB::beginTransaction();
        try{
            Quiz::create($request->all());
        
        DB::commit();
        return response()->json(['message' => 'Quiz Added suucessfully', 'alert_type' => 'success']);
     } catch(\Exception $e){
            return response()->json(['message' => $e->getMessage(), 'alert_type' => 'error']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $quiz = Quiz::where('id',$id)->first();
            $levels = Level::select('id','name')->get();
            $subjects = Subject::where('level_id',$quiz->subject->level->id)->get();
            if(!$quiz){
            return response()->json(['message' => 'quiz not found', 'alert_type' => 'error']); 
            }else{
            return view('teachers.quizzes.form-tag',compact('quiz','levels','subjects'));
            }
           
     } catch(\Exception $e){
            return response()->json(['message' => $e->getMessage(), 'alert_type' => 'error']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuizeRequest $request,$id)
    {
       
        DB::beginTransaction();
        try{
            $quiz = Quiz::findOrFail($id);
            
            $quiz->update($request->all());
            
        DB::commit();
        return response()->json(['message' => 'Quiz updated suucessfully', 'alert_type' => 'success']);
     } catch(\Exception $e){
            return response()->json(['message' => $e->getMessage(), 'alert_type' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try{
           $quiz = Quiz::findOrFail($id);
            $quiz->delete();
        DB::commit();
        return response()->json(['message' => 'Quiz removed suucessfully', 'alert_type' => 'success','icon'=>'success']);
     } catch(\Exception $e){
            return response()->json(['message' => $e->getMessage(), 'alert_type' => 'error']);
        }
    }

    public function results($id){
        $quiz = Quiz::findOrFail($id);
        $results = $quiz->results()->paginate(10);
        $questions = $quiz->questions()->select('full_mark')->get();
        $fullmark = 0;
        foreach($questions as $question){
            $fullmark += $question->full_mark;
        }
        return view('teachers.quizzes.results',compact('quiz','results','fullmark'));
    }

    public function downloadExcelResult($id)
    {
        $quiz = Quiz::findOrFail($id);
        $results = $quiz->results()->latest()->get();
        $questions = $quiz->questions()->select('full_mark')->get();
        $fullmark = 0;
        foreach($questions as $question){
            $fullmark += $question->full_mark;
        }
        return Excel::download(new ResultExport($results,$fullmark), 'results.xlsx');
    }
}
