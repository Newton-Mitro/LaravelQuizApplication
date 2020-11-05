<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Exam;
use App\Models\ExamPaper;
use App\Models\QuestionBank;
use App\Models\Segment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    public function index()
    {
        Session::put('correct_answer', 0);
        Session::put('wrong_answer', 0);
        return view('frontend.index');
    }

    public function getEmployeeDetails(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id_no' => 'required',
        ]);
        $employee = Employee::where('employee_id_no', $request->employee_id_no)->first();

        if ($employee == null) {
            return redirect()->back()->with('warning', "Wrong employee ID.");
        } elseif ($employee->id == Session::get('employee_id')) {
            return redirect()->back()->with('warning', "Your session is over.");
        } else {
            $exam = Exam::where('exam_status', true)->first();
            $segment = Segment::all();
            Session::put('employee_id', $employee->id);
            Session::put('exam_id', $exam->id);
            Session::put('total_segment', $segment->count());
            Session::put('current_segment', 1);
//            $designation = $employee->designation->designation_name;
//            $department = $employee->department->department_name;
            return view('frontend.employee')
//                ->with('designation', $designation)
//                ->with('department', $department)
                ->with('exam', $exam)
                ->with('employee', $employee);
        }
    }

    public function getExamPager()
    {
        $questions = QuestionBank::where("segment_id", 1)->get()->random(5);
        $segment = Segment::find(1);
        return view('frontend.queston_paper')
            ->with('segment', $segment->segment_name)
            ->with('questions', $questions);

    }

    public function updateExamPager(Request $request, $id)
    {

        if (Session::get('total_segment') >= Session::get('current_segment')) {
            $exam_paper1 = new ExamPaper();
            $exam_paper1->question_bank_id = $request->question_bank_id_1;
            $exam_paper1->selected_answer = $request->option_1;

            $question1 = QuestionBank::find($request->question_bank_id_1);
            if ($question1->correct_answer == $request->option_1) {
                $exam_paper1->answer_status = true;
                Session::put('correct_answer', Session::get('correct_answer') + 1);
//                echo 'c' . Session::get('correct_answer');
            } else {
                $exam_paper1->answer_status = false;
                Session::put('wrong_answer', Session::get('wrong_answer') + 1);
//                echo 'W' . Session::get('wrong_answer');
            }

            $exam_paper1->exam_id = Session::get('exam_id');
            $exam_paper1->employee_id = Session::get('employee_id');
            $exam_paper1->save();
//======================================================================================
            $exam_paper2 = new ExamPaper();
            $exam_paper2->question_bank_id = $request->question_bank_id_2;
            $exam_paper2->selected_answer = $request->option_2;

            $question2 = QuestionBank::find($request->question_bank_id_2);
            if ($question2->correct_answer == $request->option_2) {
                $exam_paper2->answer_status = true;
                Session::put('correct_answer', Session::get('correct_answer') + 1);
//                echo 'c' . Session::get('correct_answer');
            } else {
                $exam_paper2->answer_status = false;
                Session::put('wrong_answer', Session::get('wrong_answer') + 1);
//                echo 'W' . Session::get('wrong_answer');
            }

            $exam_paper2->exam_id = Session::get('exam_id');
            $exam_paper2->employee_id = Session::get('employee_id');
            $exam_paper2->save();
//======================================================================================
            $exam_paper3 = new ExamPaper();
            $exam_paper3->question_bank_id = $request->question_bank_id_3;
            $exam_paper3->selected_answer = $request->option_3;

            $question3 = QuestionBank::find($request->question_bank_id_3);
            if ($question3->correct_answer == $request->option_3) {
                $exam_paper3->answer_status = true;
                Session::put('correct_answer', Session::get('correct_answer') + 1);
//                echo 'c' . Session::get('correct_answer');
            } else {
                $exam_paper3->answer_status = false;
                Session::put('wrong_answer', Session::get('wrong_answer') + 1);
//                echo 'W' . Session::get('wrong_answer');
            }

            $exam_paper3->exam_id = Session::get('exam_id');
            $exam_paper3->employee_id = Session::get('employee_id');
            $exam_paper3->save();
//======================================================================================
            $exam_paper4 = new ExamPaper();
            $exam_paper4->question_bank_id = $request->question_bank_id_4;
            $exam_paper4->selected_answer = $request->option_4;

            $question4 = QuestionBank::find($request->question_bank_id_4);
            if ($question4->correct_answer == $request->option_4) {
                $exam_paper4->answer_status = true;
                Session::put('correct_answer', Session::get('correct_answer') + 1);
//                echo 'c' . Session::get('correct_answer');
            } else {
                $exam_paper4->answer_status = false;
                Session::put('wrong_answer', Session::get('wrong_answer') + 1);
//                echo 'W' . Session::get('wrong_answer');
            }

            $exam_paper4->exam_id = Session::get('exam_id');
            $exam_paper4->employee_id = Session::get('employee_id');
            $exam_paper4->save();
//======================================================================================
            $exam_paper5 = new ExamPaper();
            $exam_paper5->question_bank_id = $request->question_bank_id_5;
            $exam_paper5->selected_answer = $request->option_5;

            $question5 = QuestionBank::find($request->question_bank_id_5);
            if ($question5->correct_answer == $request->option_5) {
                $exam_paper5->answer_status = true;
                Session::put('correct_answer', Session::get('correct_answer') + 1);
//                echo 'C' . Session::get('correct_answer');
            } else {
                $exam_paper5->answer_status = false;
                Session::put('wrong_answer', Session::get('wrong_answer') + 1);
//                echo 'W' . Session::get('wrong_answer');
            }

            $exam_paper5->exam_id = Session::get('exam_id');
            $exam_paper5->employee_id = Session::get('employee_id');
            $exam_paper5->save();
//======================================================================================
            Session::put('current_segment', $id + 1);
//            echo 'CS' . Session::get("current_segment");
            if (Session::get('total_segment') >= Session::get('current_segment')) {
                $questions = QuestionBank::where("segment_id", $id + 1)->get()->random(5);
                $segment = Segment::find($id + 1);
                return view('frontend.queston_paper')
                    ->with('segment', $segment->segment_name)
                    ->with('questions', $questions);
            } else {
                return redirect()->route('exam.result');
            }
        } else {
            return redirect()->route('exam.result');
        }


    }

    public function showResult()
    {
        $employee = Employee::find(Session::get('employee_id'));
        $segment = Segment::all()->count();
        $exam_paper = ExamPaper::where('employee_id', $employee->id)
            ->where('exam_id', Session::get('exam_id'))->get()->count();
        return view('frontend.result')
            ->with('total_question', $segment * 5)
            ->with('correct_answer', Session::get('correct_answer'))
            ->with('wrong_answer', Session::get('wrong_answer'));

    }


}
