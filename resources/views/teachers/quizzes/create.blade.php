<div class="container w-lg-75">
    <form action="" class="submit-form">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="text-light float-right" for="title">العنوان</label>
                    <input class="form-control input-circle" id="title" type="text" name="title" value="{{ old('title') }}">
                    <span class="error red" id="title-error" style="color:red"></span>
                </div>
            </div>
           
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label class="text-light float-right" for="level_id">الفرقة</label>
                    <select class="form-control input-circle" id="level_id" name="level_id">
                       <option value=""></option>
                        @forelse ($levels as $level)
                          <option value="{{ $level->id }}">{{ $level->name }}</option>  
                        @empty
                            <option value="">not found levels</option>
                        @endforelse
                    </select>
                    <span class="error red" id="name-error" style="color:red"></span>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label class="text-light float-right" for="subject_id">المادة</label>
                    <select class="form-control input-circle" id="subject_id" name="subject_id">
                       <option value=""></option>
                    </select>
                    <span class="error red" id="name-error" style="color:red"></span>
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