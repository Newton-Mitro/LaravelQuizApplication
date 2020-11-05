<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\ExamPaper;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ResultExport implements FromView
{

    public function view(): View
    {

        return view('backend.results.export', [
            'exam_paper' => ExamPaper::orderby('id', 'DESC')->get(),
            'employees' => Employee::all()
        ]);
    }
}
