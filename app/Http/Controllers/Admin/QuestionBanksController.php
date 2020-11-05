<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\AnswerOption;
use App\Models\QuestionBank;
use App\Models\Segment;
use Illuminate\Http\Request;

class QuestionBanksController extends Controller
{
    public function index()
    {
        $question_banks = QuestionBank::orderby('id','DESC')->get();
        return view('backend.question_banks.index')->with('question_banks', $question_banks);
    }

    public function create()
    {
        $segments = Segment::all();
        $correct_answers = AnswerOption::all();
        return view('backend.question_banks.create')->with('segments', $segments)->with('correct_answers',$correct_answers);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question_text' => 'required|string|max:100',
            'segment_id' => 'required',
            'question_status' => 'required',
        ]);
        $question_bank = new QuestionBank();
        $question_bank->question_text = $request->question_text;
        if ($request->correct_answer==null){
            $question_bank->correct_answer = $request->correct_answer;
        }
        $question_bank->segment_id = $request->segment_id;
        $question_bank->question_status = $request->question_status;
        $question_bank->save();
        return redirect()->route('question_bank.index')->with('success','A question_bank has been created successfully.');
    }

    public function show($id)
    {
        $question_bank = QuestionBank::find($id);
        return view('backend.question_banks.view')->with('question_bank', $question_bank);
    }

    public function edit($id)
    {
        $question_bank = QuestionBank::find($id);
        $segments = Segment::all();
        $correct_answers = AnswerOption::where('question_bank_id',$id)->get();
        return view('backend.question_banks.edit')->with('question_bank', $question_bank)->with('segments', $segments)->with('correct_answers', $correct_answers);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'question_text' => 'required|string|max:100',
            'segment_id' => 'required',
            'question_status' => 'required',
        ]);

        $question_bank = QuestionBank::find($id);
        $question_bank->question_text = $request->question_text;
        if ($request->correct_answer_id==null){
            $question_bank->correct_answer_id = $request->correct_answer_id;
        }
        $question_bank->segment_id = $request->segment_id;
        $question_bank->question_status = $request->question_status;
        $question_bank->save();
        return redirect()->route('question_bank.index')->with('success','A question_bank has been updated successfully.');

    }

    public function destroy($id)
    {
        $question_bank = QuestionBank::find($id);
        $question_bank->delete();
        return redirect()->route('question_bank.index')->with('success','A question_bank has been deleted successfully.');
    }
}
