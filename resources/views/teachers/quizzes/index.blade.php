@extends('layouts.app')
@section('style')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-offset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toggle/bootstrap-switch.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/js/toggle/bootstrap-checkbox.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/toggle/bootstrap-switch.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/toggle/switchery.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/forms/switch.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custem/swich.css') }}">
   
@endsection
@section('title', 'Quizzes')

@section('bg-color', '#212124')

@section('content')
<div class="container">
 @include('teachers.includes.navbar')
    
  </div>

  <div class="container text-right">
    <div class="row my-4">
      <!-- NavBar List -->
     @include('teachers.includes.sidebar')
      <div class="col-lg-10 col-12">
          <!-- Doctors -->
          <div class="row mt-2">
              <div class="col-lg-4 col-5">
                  <p class="h2 text-light mr-2">إنشاء كويز جديد</p>
              </div>
              <div class="w-100"></div>
              <div class="col-lg-4 col-12 mt-4">
                  <div class="new-quiz ">
                      <div class="circle">
                          <a href="{{ route('quizes.create') }}" data-toggle="modal" data-target="#edit-course" id="create_quiz">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
        
      </div>
      <div class="row justify-content-around my-4" style="margin-right: 250px">
        <div class="col-11 table" id="load-data">
           {{-- @include('teachers.quizzes.table') --}}
        </div>
    </div>
    </div>



{{-- StartModel --}}

@include('partials.modal')
<!-- ==================================================
                End Model 
================================================== -->
    
  </div>
@endsection
@section('script')
<script src="{{ asset('assets/js/toggle/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('assets/js/toggle/bootstrap-checkbox.min.js') }}"></script>
<script src="{{ asset('assets/js/toggle/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('assets/js/toggle/switchery.min.js') }}"></script>
<script src="{{ asset('assets/js/forms/switch.min.js') }}"></script>

@endsection