

   
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="text-light float-right" for="title">العنوان</label>
                    <input class="form-control input-circle" id="title" type="text" name="title" value="{{ $quiz->title ?? old('title') }}">
                    <span class="error red" id="title-error" style="color:red"></span>
                </div>
            </div>
           
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label class="text-light float-right" for="level_id">الفرقة</label>
                    <select class="form-control input-circle" id="level_id" name="level_id">
                       <option value=""></option>
                        @forelse ($levels as $level)
                          <option value="{{ $level->id }}"{{ isset($quiz) ? ($quiz->subject->level->id == $level->id ? 'selected':''):(old('level_id') == $level->id ? 'selected':'') }}>{{ $level->name }}</option>  
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
                        @if (isset($subjects))
                         
                        @forelse ($subjects as $subject)
                        <option value="{{ $subject->id }}"{{ isset($quiz) ? ($quiz->subject->id == $subject->id ? 'selected':''):(old('subject_id') == $subject->id ? 'selected':'') }}>{{ $subject->name }}</option>
                        @empty
                        <option value="">not found subjects</option>
                        @endforelse
                        @endif
                    </select>
                    <span class="error red" id="name-error" style="color:red"></span>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label class="text-light float-right" for="duration">المدة</label>
                    <input class="form-control input-circle" id="duration" type="number" name="duration" value="{{  $quiz->duration ?? old('duration') }}">
                    <span class="error red" id="duration-error" style="color:red"></span>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label class="text-light float-right" for="expires_at">تنتهي صلاحية الكويز في</label>
                    <input class="form-control input-circle" id="expires_at" type="datetime-local" name="expires_at" value="{{ $quiz->expires_at ?? old('expires_at') }}">
                    <span class="error red" id="expires_at-error" style="color:red"></span>
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
   