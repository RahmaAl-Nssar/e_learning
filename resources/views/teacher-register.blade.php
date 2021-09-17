@extends('layouts.app')
@section('style')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-offset.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/media.css')}}">

@endsection
@section('title','register teacher')

@section('bg-color','#212124')
@section('content')

<!-- Form -->
<section class="register-sec mt-5" dir="rtl" id="section" class="submit-form">

    <!-- Header -->
    <h1 class="text-yellow text-center">
        تسجيل مستخدم جديد
    </h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <p class="text-light text-center">
        برجاء اختيار الحساب المناسب !
    </p>
    <!-- Buttons -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-6 reverse-offset-lg-4">
                <a href="register" class="btn btn-submit " class="show-student-form">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    طالب
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="teacher" class="btn btn-submit active" class="show-teacher-form">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    محاضر
                </a>
            </div>
        </div>
    </div>
    <form action="{{ route('register') }}" id="load-teaher-form" method="POST" class="submit-form">
        @csrf
        <div class="container w-lg-50">
            <div class="row text-right mt-4">
                <!-- Doctor Code -->
                <div class="col-xl-4 reverse-offset-4">
                    <div class="form-group">
                        <label class="text-light float-right" for="code">كود المحاضر </label>
                        <input class="form-control input-circle" id="code" type="text" name="code">
                    </div>
                </div>
                <!-- Name -->
                <div class="col-12">
                    <div class="form-group">
                        <label class="text-light float-right" for="name">اسم المستخدم</label>
                        <input class="form-control input-circle" id="name" type="text" name="name">
                    </div>
                </div>
                <!-- Email -->
                <div class="col-12">
                    <div class="form-group">
                        <label class="text-light float-right" for="email">البريد الالكتروني</label>
                        <input class="form-control input-circle" id="email" type="email" name="email">
                    </div>
                </div>
                <!-- Password -->
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="text-light float-right" for="password">كلمة المرور</label>
                        <input class="form-control input-circle" id="password" type="password" name="password">
                    </div>
                </div>
                <!-- Password -->
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="text-light float-right" for="password">اعادة كلمة المرور</label>
                        <input class="form-control input-circle" id="password" type="password"
                            name="password_confirmation">
                    </div>
                </div>
                <!-- job -->
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="text-light float-right" for="password"> العمل</label>
                        <input class="form-control input-circle" id="job" type="text" name="job">
                    </div>
                </div>
                <!-- bio -->
                <div class="col-12">
                    <div class="form-group">
                        <label class="text-light float-right" for="email"> نبذة مختصرة</label>
                        <textarea class="form-control input-circle" id="bio" name="bio"></textarea>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="col-lg-4 col-12 reverse-offset-lg-4 mt-3">
                    <button type="submit" class="btn btn-submit">تسجيل</button>
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
