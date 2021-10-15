<table class="table text-light text-center">
    <thead>
        <tr>
            <th class="text-right" scope="col">السؤال</th>
            
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @forelse ($questions as $question)
                <td>{{ $question->content }}</td>
                
               
                <td><a type="button" href="{{ route('edit.question',$question->id) }}" class="btn btn-edit"
                        data-toggle="modal" data-target="#edit-course" id="create_quiz">تعديل</a></td>
               
                <td>
                    <form action="#" method="post" class="form-destroy">
                    @csrf
                    @method('delete')
                    <button class="btn btn-edit" type="submit">حذف</button>
                    </form>
                </td>
        </tr>
    @empty
        <tr>
            <td colspan="7">not found questions</td>
        </tr>
        @endforelse
    </tbody>
    {{-- <tfoot>
        <tr><td>{{ $questions->links() }}</td></tr>
    </tfoot> --}}
</table>
