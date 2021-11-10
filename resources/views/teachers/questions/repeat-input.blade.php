    {{-- <div class="parent">
  <div class="repeatable">
    <input type="text" name="userInput[]" class="form-control input-circle">
    <div class="col-lg-6 col-12"> <div class="form-group"><button class="repeat bg-primary"><i class="fa fa-plus" style="color: blue;"></i></button></div></div>

  </div>
  </div> --}}


  <div class="row">
    <div class="col-lg-12">
        @if(isset($ques))
            @foreach($ques->answers()->where('is_correct', 0)->get() as $answer)
                <div class="parent">
                    <div class="repeatable">
                        <div id="inputFormRow">
                            <div class="input-group mb-3">
                                <input type="text" name="answers[]" class="form-control m-input input-circle" placeholder="Enter title" autocomplete="off" value="{{ $answer->content ?? '' }}">
                                {{-- <input type="text" name="answers[{{ $answer->id }}][content]" class="form-control m-input input-circle" placeholder="Enter title" autocomplete="off" value="{{ $answer->content ?? '' }}"> --}}
                                {{-- <input type="hidden" name="answers[{{ $answer->id }}][id]" value="{{ $answer->id ?? '' }}"> --}}
                                <span class="error red" id="answers-error" style="color:red"></span>
                                <div class="input-group-append">
                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="parent">
                <div class="repeatable">
                    <div id="inputFormRow">
                        <div class="input-group mb-3">
                            <input type="text" name="answers[]" class="form-control m-input input-circle" placeholder="Enter title" autocomplete="off">
                            <span class="error red" id="answers-error" style="color:red"></span>
                            <div class="input-group-append">
                                <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div id="newRow"></div>
    <button  type="button" class="repeat btn btn-info">Add Row</button>

</div>
