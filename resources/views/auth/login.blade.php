@extends('layouts.app')
@section('style')
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-offset.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/media.css')}}">
@endsection
@section('title','login')

@section('bg-color','#212124')

@section('content')
<section class="login-sec mt-5" dir="rtl" id="load-form">
    <!-- Header -->
    <h1 class="text-yellow text-center">
        حسابي
   </h1>
   <h1 class="text-light text-center">
       تسجيل الدخول
   </h1>
   <!-- Form -->
   <form action="{{route('login')}}" method="post" class="submit-form">
 @csrf
    <div class="container w-lg-50">
      <div class="row text-right mt-4">
        <!-- Name Or Email -->
        <div class="col-12">
          <div class="form-group">
              <label class="text-light float-right" for="email">اسم المستخدم</label>
              <input class="form-control input-circle" id="email" type="text" name="email">
              <span class="error red" id="email-error" style="color:red"></span>
          </div>
        </div>
        <!-- Password -->
        <div class="col-12">
          <div class="form-group">
              <label class="text-light float-right" for="password">كلمة المرور</label>
              <input class="form-control input-circle" id="password" type="password" name="password">
              <span class="error red" id="password-error" style="color:red"></span>
          </div>
        </div>
        <!-- Submit -->
        <div class="col-lg-4 col-12 reverse-offset-lg-4 mt-3">
          <button class="btn btn-submit">تسجيل</button>
        </div>
        <!-- Have account -->
        <div class="col-12 mt-3">
            <span class="text-light">ليس لديك حساب <a href="register0.html" class="text-yellow">قم بالتسجيل الان</a></span>
        </div>
      </div>
    </div>
  </form>
</section>
@endsection

