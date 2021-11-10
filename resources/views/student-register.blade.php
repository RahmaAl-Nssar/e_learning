@extends('layouts.app')
@section('style')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-offset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
@endsection
@section('title', 'register student')

@section('bg-color', '#212124')

@section('content')
    <section class="register-sec mt-5" dir="rtl" id="section">
        <!-- Header -->
        <h1 class="text-yellow text-center">
            تسجيل مستخدم جديد
        </h1>
        <p class="text-light text-center">
            برجاء اختيار الحساب المناسب !
        </p>
        <!-- Buttons -->
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-6 reverse-offset-lg-4">
                    <a href="register" class="btn btn-submit active" class="show-student-form">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        طالب
                    </a>
                </div>
                <div class="col-lg-2 col-6">
                    <a href="{{ route('teacher.register') }}" class="btn btn-submit " class="show-teacher-form">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        محاضر
                    </a>
                </div>
            </div>
        </div>
        <!-- Form -->
        <form action="{{ route('register') }}" id="load-form" method="POST"  class="submit-form">
            @csrf
            <div class="container w-lg-50">
                <div class="row text-right mt-4">
                    <!-- Name -->
                    <div class="col-12">
                        <div class="form-group">
                            <label class="text-light float-right" for="name"> الاسم بالكامل</label>
                            <input class="form-control input-circle" id="name" type="text" name="name">
                            <span class="error red" id="name-error" style="color:red"></span>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-12">
                        <div class="form-group">
                            <label class="text-light float-right" for="email">البريد الالكتروني</label>
                            <input class="form-control input-circle" id="email" type="email" name="email">
                            <span class="error red" id="email-error" style="color:red"></span>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label class="text-light float-right" for="password">كلمة المرور</label>
                            <input class="form-control input-circle" id="password" type="password" name="password">
                            <span class="error red" id="password-error" style="color:red"></span>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label class="text-light float-right" for="password">اعادة كلمة المرور</label>
                            <input class="form-control input-circle" id="password" type="password"
                                name="password_confirmation">
                                <span class="error red" id="passowrd_confirmation-error" style="color:red"></span>
                        </div>
                    </div>
                    <!-- phone_number -->
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label class="text-light float-right" for="password">رقم الهاتف </label>
                            <input class="form-control input-circle" id="phone_number" type="text" name="phone_number">
                            <span class="error red" id="phone_number-error" style="color:red"></span>
                        </div>
                    </div>
                    <!-- phone_number -->
                    @php
                        $levels = App\Models\Level::all();
                    @endphp
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label class="text-light float-right" for="level_id"> الفرقة </label>
                            <select class="form-control input-circle" id="level_id" name="level_id">
                              <option value="">اختر الفرقة</option>
                              @forelse ($levels as $level)
                              <option value="{{ $level->id }}">{{ $level->name }}</option>
                              @empty
                              <option value="">not found levels</option>
                              @endforelse
                            
                            </select>
                            <span class="error red" id="level_id-error" style="color:red"></span>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-lg-4 col-12 reverse-offset-lg-4 mt-3">
                        <button class="btn btn-submit">تسجيل</button>
                    </div>
                    <!-- Are you hAve account?? -->
                    <div class="col-12 mt-3">
                        <span class="text-light">لديك حساب بالفعل <a href="login.html" class="text-yellow">قم بتسجيل
                                الدخول</a></span>
                    </div>
                </div>

            </div>
        </form>
    </section>
@endsection
