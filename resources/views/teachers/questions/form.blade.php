<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label class="text-light float-right" for="content">نص السؤال</label>
            <input class="form-control input-circle" id="content" type="text" name="content"
                value="{{ $ques->content ?? old('content') }}">
            <span class="error red" id="content-error" style="color:red"></span>
        </div>
    </div>

    <div class="col-lg-6 col-12">
        <div class="form-group">
            <label class="text-light float-right" for="full_mark">درجة السؤال</label>
            <input class="form-control input-circle" id="full_mark" type="number" name="full_mark"
                value="{{ $ques->full_mark ?? old('full_mark') }}">
            <span class="error red" id="full_mark-error" style="color:red"></span>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="form-group">
            <label class="text-light float-right" for="image">الصورة(اختياري)</label>
            <input class="form-control input-circle" id="image" type="file" name="image">
            <span class="error red" id="image-error" style="color:red"></span>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label class="text-light float-right" for="correct_answer">الاجابة الصحيحة</label>
            <input class="form-control input-circle" id="correct_answer" type="text" name="correct_answer"
                value="{{ $ques->correct_answer ?? old('correct_answer') }}">
            <input type="hidden" name="correct_answer_id"
                value="{{ isset($ques) && $ques->answers ? $ques->answers()->where('is_correct', 1)->first()->id : '' }}">
            <span class="error red" id="correct_answer-error" style="color:red"></span>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label class="text-light float-right" for=""> الاجابات الخاطئة</label>

            @include('teachers.questions.repeat-input')
        </div>
    </div>

    <div class="col-12 text-right">
        <button class="btn btn-edit" type="submit">
            حفظ
        </button>
        <button class="btn btn-edit mr-2">
            حذف المحتوي
        </button>
    </div>
</div>
