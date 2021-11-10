@extends('layouts.app')

@section('title', env('APP_NAME') . ' | الكويزات')
@section('bg-color', '#212124')

@section('content')

    <!-- ==================================================
                        Start Content
    ================================================== -->
    <div class="container" style="color: white">
        <div class="row w-lg-75 mx-auto">
           
                <div id="msg"></div>
                <div class="col-12">
                    <div class="quiz-title" style="text-align: margin-right:100px;">
                        <p class="title mb-3">{{ $quiz->title }}</p>
                    </div>
                </div>
                <form class="w-100">
                  
                @csrf
                    @foreach($questions as $index => $question)
                        <input type="hidden" readonly value="{{ $quiz->id }}" name="quiz_id">
                        <input type="hidden" readonly value="{{ $questions->count() }}" name="num_of_questions">
                        <input type="hidden" readonly value="{{ \Carbon\Carbon::now() }}" name="timeOfSubmittingQuiz">
                        <div class="col-12">
                            <div class="quiz-question">
                                <p class="question text-center">{{ $question->content }}</p>
                                @if($question->image != NULL)
                                    <a href="" target="_blank">
                                        <img class="mx-xl-5 mx-auto ml-lg-auto" src="{{ asset('storage/uploads/questions/'.$question->image) }}" alt="{{ $question->content }}" title="{{ $question->title }}" height="100" width="100">
                                    </a>
                                @endif

                                @foreach($question->answers()->get() as $answer)
                                
                                    <label class="answer">
                                        {{ $answer->content }}
                                        <input type="radio" {{$answer->is_correct == 1 ? 'checked':'' }}
                                         name="answer_{{$index}}" value="{{ $answer->id }}" required>
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    {{-- <button class="d-none submit-form" type="submit">submit</button> --}}
                    <button class="btn btn-edit" type="submit">حفظ</button>
                    
                </form>
                <br><br>
            
        </div>
    </div>
    <!-- ==================================================
                        End Content
    ================================================== -->
@endsection

