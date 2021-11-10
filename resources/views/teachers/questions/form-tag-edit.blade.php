
<form action="{{ route('qusetion.update', $ques) }}" class="submit-form" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    @include('teachers.questions.form-edit')

    {{-- @include('teachers.questions.index') --}}
</form>


