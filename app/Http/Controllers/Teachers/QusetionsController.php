<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionsRequest;
use Illuminate\Support\Facades\DB;
use App\Traits\uploadImage;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Answer;
use App\User;

class QusetionsController extends Controller
{
    use uploadImage;
    public function index($id)
    {
        try {
            if (request()->ajax()) {
                $questions = Question::where('quiz_id', $id)->get();
                return view('teachers.questions.table', compact('questions'));
            } else {
                $user = User::where('id', auth()->id())->first();
                $quiz = Quiz::where('id', $id)->first();

                return view('teachers.questions.index', compact('user', 'quiz'));
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'alert_type' => 'error']);
        }
    }

    public function create($id)
    {
        return view('teachers.questions.form-tag', compact('id'));
    }

    public function store(QuestionsRequest $request)
    {
        DB::beginTransaction();
        try {
            $question = new Question();
            $question->quiz_id = $request->quiz_id;
            $question->content = $request->content;
            $question->correct_answer = $request->correct_answer;
            $question->full_mark = $request->full_mark;

            if ($request->has('image')) {
                $question->image = $this->uploadFile($request->image, 'questions');
            }
            $question->save();
            Answer::create([
                'question_id' => $question->id,
                'content' => $request->correct_answer,
                'is_correct' => 1
            ]);
            foreach ($request->answers as $answer) {
                Answer::create([
                    'question_id' => $question->id,
                    'content' => $answer,
                    'is_correct' => 0
                ]);
            }

            if ($request->title) {
                foreach ($request->title as $item) {
                    Answer::create([
                        'question_id' => $question->id,
                        'content' => $item,
                        'is_correct' => 0
                    ]);
                }
            }

            DB::commit();
            return response()->json(['message' => 'Question Added suucessfully', 'alert_type' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'alert_type' => 'error']);
        }
    }

    public function edit($id)
    {
        $ques = Question::where('id', $id)->first();
        return view('teachers.questions.form-tag', compact('ques'));
    }

    public function update(QuestionsRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $question =  Question::where('id', $id)->first();
            $question->content = $request->content;
            $question->correct_answer = $request->correct_answer;
            $question->full_mark = $request->full_mark;

            if ($request->has('image')) {
                $question->image = $this->uploadFile($request->image, 'questions');
            }
            $question->save();

            $answer = Answer::findOrFail($request->correct_answer_id);
            $answer->update([
                'question_id' => $question->id,
                'content' => $request->correct_answer,
                'is_correct' => 1
            ]);

            foreach ($request->answers as $item) {
                $answer = Answer::findOrFail($item['id']);
                $answer->update([
                    'question_id' => $question->id,
                    'content' => $item['content'],
                    'is_correct' => 0
                ]);
            }

            if ($request->title) {
                foreach ($request->title as $item) {
                    Answer::create([
                        'question_id' => $question->id,
                        'content' => $item,
                        'is_correct' => 0
                    ]);
                }
            }
            DB::commit();
            return response()->json(['message' => 'Question updated suucessfully', 'alert_type' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'alert_type' => 'error']);
        }
    }
}
