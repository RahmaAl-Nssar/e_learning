@extends('layouts.app')
@section('style')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-offset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
@endsection
@section('title', 'student home')

@section('bg-color', '#212124')

@section('content')
    <!-- ==================================================
                          Start Profile Section
        ================================================== -->
    <div class="container">
        <!-- Row -->
        @include('students.includes.navbar')

    </div>
    <!-- ==================================================
                            End Profile Section
          ================================================== -->

    <!-- ==================================================
                            Start Content Section
          ================================================== -->
    <div class="container text-right">
        <div class="row my-4">
            <!-- NavBar List -->
            @include('teachers.includes.sidebar')
            <div class="col-lg-10 col-12">
                <!-- Doctors -->
                <div class="row justify-content-between mt-2">
                   
                    <div class="col-lg-12 col-12 text-left">
                        <button class="btn btn-edit" data-toggle="modal" data-target="#create-content">اضافة محتوي
                            جديد</button>
                    </div>
                </div>

                <div class="row justify-content-around my-4">
                    <div class="col-11">
                        <table class="table text-light text-center">
                            <thead>
                                <tr>
                                    <th class="text-right" scope="col">الكويز</th>
                                    <th scope="col">المادة</th>
                                    <th class="d-max-none" scope="col"> </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              
                          
                                @forelse ($quizzes as $quiz)
                                @php
                                $finished = App\Models\QuizStudent::where('quiz_id',$quiz->id)
                                ->where('student_id',$student->id)->first();
                                
                                @endphp
                                <tr>
                                  <th class="text-right">{{ $quiz->title }}</th>
                                  <td>{{ $quiz->subject->name }}</td>
                                  <td>
                                   
                                    @if (is_null($finished))
                                    <a class="btn btn-edit"
                                       href="{{ route('quiz.enrole',$quiz->id) }}"> 
                                      دخول الكويز
                                  </a>
                                    @else
                                    <a class="btn btn-edit"
                                    href="{{ route('student.quiz.show',$quiz->id) }}"> 
                                   عرض الكويز
                               </a> 
                                    @endif
                                     
                                  </td>
                                 
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">لا يوجد كويزات</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.modal')
    </div>
@endsection
