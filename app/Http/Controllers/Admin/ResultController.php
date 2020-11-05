<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ResultExport;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\ExamPaper;
use Maatwebsite\Excel\Facades\Excel;

class ResultController extends Controller
{
    public function index()
    {
        $exam_paper = ExamPaper::orderby('id','DESC')->get();
        $employees = Employee::all();
        return view('backend.results.index')
            ->with('employees', $employees)
            ->with('exam_paper', $exam_paper);
    }

    public function resultExport()
    {
        return Excel::download(new ResultExport, 'Exam Result.xlsx');
    }


}
