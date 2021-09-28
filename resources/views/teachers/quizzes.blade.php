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
                          <a href="">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          {{-- <div class="row mt-5">
              <div class="col-lg-4 col-5">
                  <p class="h2 text-light mr-2">آخر الكويزات</p>
              </div>
              <div class="w-100"></div>
              <div class="col-4 mb-5">
                  <div class="old-quiz">
                      <div class="name">
                          <p class="text-light m-auto">Quiz 1</p>
                      </div>
                      <div class="detail mt-2 ml-2">
                          <span class="float-left">
                              <i class="text-grey">Friday, April 9, 2021</i>
                              <i class="fa fa-clock-o text-yellow" aria-hidden="true"></i>
                          </span>
                          <div class="dropdown">
                              <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-pencil" aria-hidden="true"></i>
                                          <i class="mr-3">تعديل الإسم</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                          <i class="mr-3">حذف</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-external-link" aria-hidden="true"></i>
                                          <i class="mr-3">فتح في نافذة جديدة</i>
                                      </a>
                                  </li>
                                </ul>
                          </div>
                      </div> 
                  </div>
              </div>
              <div class="col-4 mb-5">
                  <div class="old-quiz">
                      <div class="name">
                          <p class="text-light m-auto">Quiz 1</p>
                      </div>
                      <div class="detail mt-2 ml-2">
                          <span class="float-left">
                              <i class="text-grey">Friday, April 9, 2021</i>
                              <i class="fa fa-clock-o text-yellow" aria-hidden="true"></i>
                          </span>
                          <div class="dropdown">
                              <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-pencil" aria-hidden="true"></i>
                                          <i class="mr-3">تعديل الإسم</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                          <i class="mr-3">حذف</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-external-link" aria-hidden="true"></i>
                                          <i class="mr-3">فتح في نافذة جديدة</i>
                                      </a>
                                  </li>
                                </ul>
                          </div>
                      </div> 
                  </div>
              </div>
              <div class="col-4 mb-5">
                  <div class="old-quiz">
                      <div class="name">
                          <p class="text-light m-auto">Quiz 1</p>
                      </div>
                      <div class="detail mt-2 ml-2">
                          <span class="float-left">
                              <i class="text-grey">Friday, April 9, 2021</i>
                              <i class="fa fa-clock-o text-yellow" aria-hidden="true"></i>
                          </span>
                          <div class="dropdown">
                              <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-pencil" aria-hidden="true"></i>
                                          <i class="mr-3">تعديل الإسم</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                          <i class="mr-3">حذف</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-external-link" aria-hidden="true"></i>
                                          <i class="mr-3">فتح في نافذة جديدة</i>
                                      </a>
                                  </li>
                                </ul>
                          </div>
                      </div> 
                  </div>
              </div>
              <div class="col-4 mb-5">
                  <div class="old-quiz">
                      <div class="name">
                          <p class="text-light m-auto">Quiz 1</p>
                      </div>
                      <div class="detail mt-2 ml-2">
                          <span class="float-left">
                              <i class="text-grey">Friday, April 9, 2021</i>
                              <i class="fa fa-clock-o text-yellow" aria-hidden="true"></i>
                          </span>
                          <div class="dropdown">
                              <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-pencil" aria-hidden="true"></i>
                                          <i class="mr-3">تعديل الإسم</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                          <i class="mr-3">حذف</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-external-link" aria-hidden="true"></i>
                                          <i class="mr-3">فتح في نافذة جديدة</i>
                                      </a>
                                  </li>
                                </ul>
                          </div>
                      </div> 
                  </div>
              </div>
              <div class="col-4 mb-5">
                  <div class="old-quiz">
                      <div class="name">
                          <p class="text-light m-auto">Quiz 1</p>
                      </div>
                      <div class="detail mt-2 ml-2">
                          <span class="float-left">
                              <i class="text-grey">Friday, April 9, 2021</i>
                              <i class="fa fa-clock-o text-yellow" aria-hidden="true"></i>
                          </span>
                          <div class="dropdown">
                              <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-pencil" aria-hidden="true"></i>
                                          <i class="mr-3">تعديل الإسم</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                          <i class="mr-3">حذف</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-external-link" aria-hidden="true"></i>
                                          <i class="mr-3">فتح في نافذة جديدة</i>
                                      </a>
                                  </li>
                                </ul>
                          </div>
                      </div> 
                  </div>
              </div>
              <div class="col-4 mb-5">
                  <div class="old-quiz">
                      <div class="name">
                          <p class="text-light m-auto">Quiz 1</p>
                      </div>
                      <div class="detail mt-2 ml-2">
                          <span class="float-left">
                              <i class="text-grey">Friday, April 9, 2021</i>
                              <i class="fa fa-clock-o text-yellow" aria-hidden="true"></i>
                          </span>
                          <div class="dropdown">
                              <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-pencil" aria-hidden="true"></i>
                                          <i class="mr-3">تعديل الإسم</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                          <i class="mr-3">حذف</i>
                                      </a>
                                  </li>
                                  <li>
                                      <a class="dropdown-item" href="#">
                                          <i class="fa fa-external-link" aria-hidden="true"></i>
                                          <i class="mr-3">فتح في نافذة جديدة</i>
                                      </a>
                                  </li>
                                </ul>
                          </div>
                      </div> 
                  </div>
              </div>
          </div> --}}
      </div>
    </div>


   
   
    
  </div>
@endsection