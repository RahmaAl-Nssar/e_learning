<?php

namespace App\Exports;

use App\Models\QuizStudent;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
class ResultExport implements FromView
{
    protected $results;
    protected $fullmark;

    public function __construct($results,$fullmark){
        $this->results = $results;
        $this->fullmark = $fullmark;
    }
    public function view():View
    {
        return view('exports.results',[
            'results'=>$this->results,
            'fullmark'=>$this->fullmark
        ]);
    }
}
