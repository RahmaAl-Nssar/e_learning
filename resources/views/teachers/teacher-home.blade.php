@extends('layouts.app')
@section('style')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-offset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
@endsection
@section('title', 'teacher home')

@section('bg-color', '#212124')

@section('content')
    <!-- ==================================================
                          Start Profile Section
        ================================================== -->
    <div class="container">
        <!-- Row -->
        @include('teachers.includes.navbar')

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
                    <div class="col-lg-4 col-5">
                        <p class="h2 text-light mr-2">كورساتي</p>
                    </div>
                    <div class="col-lg-3 col-4 text-left">
                        <button class="btn btn-edit" data-toggle="modal" data-target="#create-content">اضافة محتوي
                            جديد</button>
                    </div>
                </div>

                <div class="row justify-content-around my-4">
                    <div class="col-10">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <div class="form-group arraw-white">
                                        <select class="form-control form-control-sm input-circle"
                                            id="exampleFormControlSelect1">
                                            <option>عرض كل المواد</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="form-group arraw-white">
                                        <select class="form-control form-control-sm input-circle"
                                            id="exampleFormControlSelect1">
                                            <option>عرض كل الاقسام</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="form-group arraw-white">
                                        <select class="form-control form-control-sm input-circle"
                                            id="exampleFormControlSelect1">
                                            <option>عرض كل المواد</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="form-group arraw-white">
                                        <select class="form-control form-control-sm input-circle"
                                            id="exampleFormControlSelect1">
                                            <option>عرض كل الترمات</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-1 col-2 align-self-center">
                        <a class="text-yellow" href=""><i class="fa fa-refresh h-font" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row justify-content-around my-4">
                    <div class="col-11">
                        <table class="table text-light text-center">
                            <thead>
                                <tr>
                                    <th class="text-right" scope="col">الكورس</th>
                                    <th scope="col">المادة</th>
                                    <th scope="col">القسم</th>
                                    <th scope="col">الفرقة</th>
                                    <th class="d-max-none" scope="col">الترم</th>
                                    <th class="d-max-none" scope="col">عدد المشاهدات</th>
                                    <th class="d-max-none" scope="col">نتائج الكويز</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-right">الدايوت</th>
                                    <td>‫‪‬‬الالكترونية</td>
                                    <td>كهربا</td>
                                    <td>الاولي</td>
                                    <td class="d-max-none">الاول</td>
                                    <td class="d-max-none">5000</td>
                                    <td class="d-max-none">صيفررر</td>
                                    <td><button class="btn btn-edit" data-toggle="modal"
                                            data-target="#edit-course">تعديل</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================================================
                            End Content Section
          ================================================== -->

    <!-- ==================================================
                          Start Edit Model Section
          ================================================== -->
    <div class="modal fade" id="edit-course" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body bg-model">
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <br>
                    <div class="contect">
                        <h5 class="text-yellow text-center">تعديل المحتوي</h5>
                        <div class="container w-lg-75">
                            <form action="">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="text-light float-right" for="name">الاسم</label>
                                            <input class="form-control input-circle" id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="text-light float-right" for="name">التخصص</label>
                                            <input class="form-control input-circle" id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="text-light float-right" for="name">الفرقة</label>
                                            <input class="form-control input-circle" id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="text-light float-right" for="name">الترم</label>
                                            <input class="form-control input-circle" id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="text-light float-right" for="name">المادة</label>
                                            <input class="form-control input-circle" id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="text-light float-right" for="name">رابط الفيديو</label>
                                            <input class="form-control input-circle" id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="text-light float-right" for="name">الوصف</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="الرسالة"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="text-light float-right" for="name">ملاحظات</label>
                                            <input class="form-control input-circle" id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 text-right">
                                        <button class="btn btn-edit">
                                            حفظ
                                        </button>
                                        <button class="btn btn-edit mr-2">
                                            حذف المحتوي
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================================================
                          End Edit Model Section
          ================================================== -->

    <!-- ==================================================
                          Start Create Model Section
          ================================================== -->
    <div class="modal fade" id="create-content" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bg-model">
                <div class="modal-body">
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <br>
                    <div class="contect">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="nav nav-tabs justify-content-around" id="myTab" role="tablist">
                                        <li class="nav_item pb-1">
                                            <a class="active text-light" id="home-tab" data-toggle="tab" href="#home"
                                                role="tab" aria-controls="home" aria-selected="true">كورس جديد</a>
                                        </li>
                                        <li class="nav_item pb-1">
                                            <a class="text-light" id="profile-tab" data-toggle="tab" href="#profile"
                                                role="tab" aria-controls="profile" aria-selected="false">محاضرة جديدة</a>
                                        </li>
                                        <li class="nav_item pb-1">
                                            <a class="text-light" id="contact-tab" data-toggle="tab" href="#contact"
                                                role="tab" aria-controls="contact" aria-selected="false">خبر</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="container  w-lg-75">
                                                <form action="" class="mt-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="text-light float-right" for="name">اسم
                                                                    الكورس</label>
                                                                <input class="form-control input-circle" id="name"
                                                                    type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">التخصص</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">الفرقة</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">الترم</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">المادة</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="text-light float-right"
                                                                    for="name">الوصف</label>
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1" rows="3"
                                                                    placeholder="الرسالة"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-right">
                                                            <button class="btn btn-edit">
                                                                انشاء
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="container  w-lg-75">
                                                <form action="" class="mt-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">الاسم</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">التخصص</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">الفرقة</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">الترم</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-12">
                                                            <div class="form-group arraw-white">
                                                                <label class="text-light float-right"
                                                                    for="name">المادة</label>
                                                                <select class="form-control input-circle"
                                                                    id="exampleFormControlSelect1">
                                                                    <option></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="text-light float-right" for="name">رابط
                                                                    الفيديو</label>
                                                                <input class="form-control input-circle" id="name"
                                                                    type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="text-light float-right"
                                                                    for="name">الوصف</label>
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="text-light float-right"
                                                                    for="name">ملاحظات</label>
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-right">
                                                            <button class="btn btn-edit">
                                                                انشاء
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <form action="" class="mt-4">
                                                <div class="row w-75 mx-auto justify-content-center">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control dark-input"
                                                                id="exampleFormControlTextarea1" rows="7"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group arraw-black-l">
                                                            <label class="text-light float-right" for="name">التخصص </label>
                                                            <select class="form-control dark-input"
                                                                id="exampleFormControlSelect1">
                                                                <option></option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group arraw-black-l">
                                                            <label class="text-light float-right" for="name">الفرقة </label>
                                                            <select class="form-control dark-input"
                                                                id="exampleFormControlSelect1">
                                                                <option></option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group ">
                                                            <label class="text-light float-right"
                                                                for="name">المجموعة</label>
                                                            <input class="form-control dark-input" type="text" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group ">
                                                            <label class="text-light float-right" for="name">السكشن</label>
                                                            <input class="form-control dark-input" type="text" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="btn btn-outline-delete" type="submit" value="إلغاء">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================================================
                          End Create Model Section
          ================================================== -->


    <!-- ==================================================
                          Start Edit Profile Model Section
          ================================================== -->
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
    </div>
@endsection
