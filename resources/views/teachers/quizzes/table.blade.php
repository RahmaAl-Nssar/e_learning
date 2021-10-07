<table class="table text-light text-center">
    <thead>
        <tr>
            <th class="text-right" scope="col">الكويز</th>
            <th scope="col">المادة</th>
            <th scope="col">عدد الطلبة</th>
            <th scope="col">الفرقة</th>
            <th class="d-max-none" scope="col">مرئي</th>
            <th class="d-max-none" scope="col"></th>
            <th class="d-max-none" scope="col"> </th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @forelse ($quizzes as $quiz)



                <td>{{ $quiz->title }}</td>
                <td>{{ $quiz->subject->name }}</td>
                <td></td>
                <td>{{ $quiz->subject->level->name }}</td>
                <td></td>

                <td class="d-max-none">الاسئلة</td>
                <td class="d-max-none">النتائج</td>

                <td><a type="button" href="{{ route('quizes.edit', $quiz->id) }}" class="btn btn-edit"
                        data-toggle="modal" data-target="#edit-course" id="create_quiz">تعديل</a></td>
                <td><button class="btn btn-edit" data-toggle="modal" data-target="#delete-course">حذف</button></td>
        </tr>
    @empty
        <tr>
            <td colspan="7">not found quizzes</td>
        </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr><td>{{ $quizzes->links() }}</td></tr>
    </tfoot>
</table>
