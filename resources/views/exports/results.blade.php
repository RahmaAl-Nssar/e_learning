
      <div class="row justify-content-around my-4 col-6" style="margin-right: 250px;">
        <div class="col-11 table">
            <table class="table text-light text-center">
                <thead>
                    <tr>
                        
                        <th scope="col">الطالب</th>
                        <th scope="col">الدرجة({{ $fullmark }})</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($results as $result)
                    <tr>
                       
                            
                            <td>{{ $result->student->user->name}}</td>
                            <td>{{ $result->result }}</td>
                           
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">not found quizzes</td>
                    </tr>
                    @endforelse
                </tbody>
              
            </table>
            
        </div>
    </div>
   