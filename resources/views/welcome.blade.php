@extends('layouts.app')

@section('navbar')
    @include('partials.navbar')
   
@endsection
@section('nav')
@include('partials.nav')
@endsection
@section('bg-color','#fee132')
@section('content')


<section class="mid-section-home" dir="rtl">
    <div class="container">
      <p class="h7 text-center">
        من نحن
      </p>
      <p class="h5 text-center">
        أسرة زيجزاج هي نشاط طلابي غير هادف للربح تم إنشاؤه في كلية الهندسة جامعة الزقازيق ، لجميع الأقسام في عام 2017 من قبل مجموعة من طلاب الهندسة هدفها الرئيسي هو مساعدة الطلاب في جميع المجالات العلمية.
      </p>
      <div class="boxes">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
          <div class="box">
            <img class="img-1" src="{{asset('assets/img/Group 69@4X.png')}}" alt="">
            <p class="h3 text-center">
              ‫الرؤية‬
            </p>
            <p class="h6 text-center">
              خلق أجيال من الطلاب كمبدعين
              وقادة ماهرين ومبتكرين وأكثر تطوراً
              وخبرة بالطريقة الصحيحة للتعلم وفي مختلف
              مجالات العلوم والتكنولوجيا
            </p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
          <div class="box ">
            <img class="img-2" src="{{asset('assets/img/target@4X.png')}}" alt="">
            <p class="h3 text-center">
              ‫الرؤية‬
            </p>
            <p class="h6 text-center">
              خلق أجيال من الطلاب كمبدعين
              وقادة ماهرين ومبتكرين وأكثر تطوراً
              وخبرة بالطريقة الصحيحة للتعلم وفي مختلف
              مجالات العلوم والتكنولوجيا
            </p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
          <div class="box">
            <img class="img-3" src="{{asset('assets/img/achievement@4X.png')}}" alt="">
            <p class="h3 text-center">
              ‫الرؤية‬
            </p>
            <p class="h6 text-center">
              خلق أجيال من الطلاب كمبدعين
              وقادة ماهرين ومبتكرين وأكثر تطوراً
              وخبرة بالطريقة الصحيحة للتعلم وفي مختلف
              مجالات العلوم والتكنولوجيا
            </p>
          </div>
        </div>
       </div>
      </div>
      <div class="lecturer ">
      <div class="row justify-content-center mx-auto">
        <div class="col-lg-5 col-12">
          <div class="lecturer-img">
            <img src="{{asset('assets/img/interface_image.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-7">
            <p class="h6">المحاضرين</p>
            <p class="h5">
              أسرة زيجزاج هي نشاط طلابي غير هادف للربح تم إنشاؤه في كلية الهندسة جامعة الزقازيق ، لجميع الأقسام في عام 2017 من قبل مجموعة من طلاب الهندسة هدفها الرئيسي هو مساعدة الطلاب في جميع المجالات العلمية.
            </p>
            <button type="button" class="btn btn-lecturer mr-3 mt-2">
              التسجيل كمحاضر
            </button>
        </div>
      </div>
      </div>  
      <div class="lecturer">
        <div class="row">
          <div class="col-lg-7 col-12">
            <p class="h6">المحاضرين</p>
            <p class="h5">
                أسرة زيجزاج هي نشاط طلابي غير هادف للربح تم إنشاؤه في كلية الهندسة جامعة الزقازيق ، لجميع الأقسام في عام 2017 من قبل مجموعة من طلاب الهندسة هدفها الرئيسي هو مساعدة الطلاب في جميع المجالات العلمية.
            </p>
            <button type="button" class="btn btn-lecturer mr-3 mt-2">
                التسجيل كمحاضر
            </button>
          </div>
          <div class="col-lg-5  mt-lg-0 mr-lg-0  mt-sm-3 mr-md-5 col-12">
            <div class="lecturer-img">
              <img src="{{asset('assets/img/Group 78@1X.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="circle-1">
        <img src="{{asset('assets/img/Group 81@1X.png')}}" alt="">
      </div>
      <div class="circle-2">
        <img src="{{asset('assets/img/Group 81@1X.png')}}" alt="">
      </div>
      <div class="circle-3">
        <img src="{{asset('assets/img/Group 81@1X.png')}}" alt="">
      </div>
      <div class="plus-1">
        <img src="{{asset('assets/img/Path 162@1X.png')}}" alt="">
      </div>
      <div class="plus-2">
        <img src="{{asset('assets/img/Path 162@1X.png')}}" alt="">
      </div>
      <div class="plus-3">
        <img src="{{asset('assets/img/Path 162@1X.png')}}" alt="">
      </div>
      <div class="plus-4">
        <img src="{{asset('assets/img/Path 162@1X.png')}}" alt="">
      </div>
      <div class="plus-5">
        <img src="{{asset('assets/img/Path 162@1X.png')}}" alt="">
      </div>
      <div class="rectangle-1">
        <img src="{{asset('assets/img/Group 70@1X.png')}}" alt="">
      </div>
      <div class="rectangle-2">
        <img src="{{asset('assets/img/Group 70@1X.png')}}" alt="">
      </div>
    </div>
  </section>
  @include('partials.footer') 
@endsection
