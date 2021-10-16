@if (isset($ques))
<form action="{{ route('qusetion.update', $ques) }}" class="submit-form" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    @include('teachers.questions.form')

    {{-- @include('teachers.questions.index') --}}
</form>
@else
<form action="{{ route('qusetions.store') }}" class="submit-form" method="POST" enctype="multipart/form-data">>
    @csrf
   <input type="hidden" name="quiz_id" value="{{ $id }}">
    @include('teachers.questions.form')
</form>
@endif

