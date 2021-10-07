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