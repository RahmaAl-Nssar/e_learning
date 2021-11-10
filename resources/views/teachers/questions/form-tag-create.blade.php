
<form action="{{ route('qusetions.store') }}" class="submit-form" method="POST" enctype="multipart/form-data">>
    @csrf
   <input type="hidden" name="quiz_id" value="{{ $id }}">
    @include('teachers.questions.form-create')
</form>


