@extends('layouts.app')
@section('style')
   
 
@endsection
@section('title', 'Questions')

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
                  <p class="h2 text-light mr-2">إنشاء سؤال جديد</p>
              </div>
              <div class="w-100"></div>
              <div class="col-lg-4 col-12 mt-4">
                  <div class="new-quiz ">
                      <div class="circle">
                          <a href="{{ route('qusetions.create',$quiz->id) }}" data-toggle="modal" data-target="#edit-course" id="create_quiz">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
        
      </div>
      <div class="row justify-content-around my-4" style="margin-right: 250px">
        <div class="col-11 table" id="load-data">
           
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
{{-- <script>
    $(document).on('click', '.repeat', function (e) {
    e.preventDefault();
    $('.repeatable').parent('div.parent').append($('.parent').children('div:first').html());
});

$(document).on('click', '#removeRow', function () {
    
        $(this).closest('.repeatable').remove();
    });
</script> --}}
<script type="text/javascript">
    // add row
    $(document).on('click', '.repeat', function (e) {
        e.preventDefault();
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
        
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>
@endsection