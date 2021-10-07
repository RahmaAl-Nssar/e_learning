@if (isset($quiz))
<form action="{{ route('quizes.update',$quiz->id) }}" class="submit-form" method="POST">
    @method('put')
    @csrf
    @include('teachers.quizzes.form')
</form>
@else
<form action="{{ route('quizes.store') }}" class="submit-form" method="POST">
    @csrf
    @include('teachers.quizzes.form')
</form>
@endif

   