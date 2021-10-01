@extends('layouts.app')
@section('style')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-offset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
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
      <div class="col-2 d-none d-lg-block">
        <ul>
          <!-- Active With text-yellow -->
          <li class="mt-3">
            <a href="courses1.html" class="text-yellow text-light h4 ">كورساتي</a>
          </li>
          <li class="mt-5">
            <a href="students.html" class="text-light h4">طلابي</a>
          </li>
          <li class="mt-5">
            <a href="students.html" class="text-light h4">كوزاتي</a>
          </li>
        </ul>
      </div>
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
    </div>


   
    <div class="modal fade" id="edit-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body bg-model">
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
                <div class="contect">
                    <div class="container">
                        <form action="{{ route('teacher.update') }}" class="submit-form" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="row align-items-center mt-3">
                                <div class="col-2">

                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="edit-profile-image text-right">
                                        <img class="rounded-circle" src="{{ $user->image_url }}" height="108"
                                            width="108" alt="" title="">

                                        <button class="btn " type="button">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <input type="file" name="image" id="lol" style="display: none;">
                                        <span class="error red" id="image-error" style="color:red"></span>
                                    </div>

                                </div>
                                <div class="col-10">
                                    <div class="show-profile-name">
                                        <p class="name">{{ auth()->user()->name }}</p>
                                        <p class="job">{{ auth()->user()->bio }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row w-75 mx-auto">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="text-grey float-right" for="name">إسم المستخدم</label>
                                        <input class="form-control dark-input" id="name" type="text" autocomplete="off"
                                            placeholder="إسم المستخدم" name="name" value="{{ $user->name }}">
                                        <span class="error red" id="name-error" style="color:red"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="text-grey float-right" for="email">البريد الإلكتروني</label>
                                        <input class="form-control dark-input" id="email" type="email" name="email"
                                            autocomplete="off" placeholder="nn0114250@gmail.com"
                                            value="{{ $user->email }}">
                                        <span class="error red" id="email-error" style="color:red"></span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="text-grey float-right" for="job"> الوظيفة</label>
                                        <input class="form-control dark-input" id="job" type="text" name="job"
                                            autocomplete="off" placeholder="مساعد مدرس"
                                            value="{{ $user->teacher->job }}">
                                        <span class="error red" id="job-error" style="color:red"></span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="text-grey float-right" for="bio"> نبذة مختصرة</label>
                                        <textarea class="form-control dark-input" id="bio" type="text"
                                            name="bio">{{ $user->teacher->bio }}</textarea>
                                        <span class="error red" id="bio-error" style="color:red"></span>
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <div class="row justify-content-around">
                                        <input class="btn btn-outline-save" type="submit" value="حفظ ">
                                        <input class="btn btn-outline-delete" type="submit" value="إلغاء">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Start Edit Model Section --}}

<div class="modal fade" id="edit-course" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
  <div class="modal-content">
      <div class="modal-body bg-model">
          <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <br>
          <div class="contect" id="var_content">
             
          </div>
      </div>
  </div>
</div>
</div>
<!-- ==================================================
                End Edit Model Section
================================================== -->
    
  </div>
@endsection
