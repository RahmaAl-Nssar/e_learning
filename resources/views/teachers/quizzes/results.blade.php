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
 <div class="col-lg-2 col-4 text-light align-self-center">
    <a href="{{ route('export.excel.result',$quiz->id) }}" type="button" class="btn btn-edit"> export excel</a>
  </div>
  </div>

  <div class="container text-right">
    <div class="row my-4">
      <!-- NavBar List -->
     @include('teachers.includes.sidebar')
     
      <div class="row justify-content-around my-4 col-6" style="margin-right: 250px;">
        <div class="col-11 table">
            <table class="table text-light text-center">
                <thead>
                    <tr>
                        
                        <th scope="col">الطالب</th>
                        <th scope="col">الدرجة({{ $fullmark }})</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($results as $result)
                    <tr>
                       
                            
                            <td>{{ $result->student->user->name}}</td>
                            <td>{{ $result->result }}</td>
                           
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">not found quizzes</td>
                    </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr><td>{{ $results->links() }}</td></tr>
                </tfoot>
            </table>
            
        </div>
    </div>
    </div>




    
  </div>
@endsection
@section('script')
<script src="{{ asset('assets/js/toggle/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('assets/js/toggle/bootstrap-checkbox.min.js') }}"></script>
<script src="{{ asset('assets/js/toggle/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('assets/js/toggle/switchery.min.js') }}"></script>
<script src="{{ asset('assets/js/forms/switch.min.js') }}"></script>

@endsection