  <!-- Row -->
  <div class="row justify-content-md-between text-left">
          <!-- Image And Name-->
          <div class="col-lg-4 col-8 text-light">
            <div class="row">
              <!-- Image -->
              <div class="col-3 align-self-center">
                <img class="rounded-circle" src="img/f324158a7087ed4d700bcfa9cd5431e8" alt="" width="50">
              </div>
              <!-- Name -->
              <div class="col-9 my-4 mr-0 text-right align-self-center">
                <h4 class="p-0 m-0">{{ auth()->user()->name }}</h4>
                <h6 class="p-0 m-0"><a class="text-light" href="">تعديل الاسم</a> - <a class="text-light" href="">أضافة سيرة ذاتية</a></h6>
              </div>
            </div>
          </div>
          <!-- Edit Profile Button -->
          <div class="col-lg-2 col-4 text-light align-self-center">
            <a href="{{ route('teacher.edit.profile') }}" type="button" class="btn btn-edit" data-toggle="modal" data-target="#edit-course" id="create_quiz">تعديل البروفايل</a>
          </div>
        </div>