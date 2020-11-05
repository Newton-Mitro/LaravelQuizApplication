@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('question_bank.index')}}">Questions</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <a href="{{route('question_bank.index')}}" class="btn btn-sm btn-dark">Questions</a>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-department_name text-bold">Edit Question</h3>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form method="POST" action="{{ route('question_bank.update',['id'=>$question_bank->id]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="segment_id"
                                   class="col-md-4 col-form-label text-md-right">Segment</label>

                            <div class="col-md-6">
                                <select class="form-control" name="segment_id" id="segment_id">
                                    <option name="segment_id">Select Segment</option>
                                    @foreach($segments as $segment)
                                        @if($question_bank->segment_id == $segment->id)
                                            <option selected name="segment_id"
                                                    value="{{$segment->id}}">{{$segment->segment_name}}</option>
                                        @else
                                            <option name="segment_id"
                                                    value="{{$segment->id}}">{{$segment->segment_name}}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @error('segment_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_text" class="col-md-4 col-form-label text-md-right">Question
                                Text</label>

                            <div class="col-md-6">
                                <input id="question_text" type="text"
                                       class="form-control @error('question_text') is-invalid @enderror"
                                       name="question_text"
                                       value="{{ $question_bank->question_text }}" autocomplete="department_name"
                                       autofocus>

                                @error('question_text')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="correct_answer_id" class="col-md-4 col-form-label text-md-right">Correct
                                Answer</label>

                            <div class="col-md-6">
                                <select class="form-control" name="correct_answer_id" id="correct_answer_id">
                                    <option name="correct_answer_id" value="0">Select Correct Answer</option>
                                    @if($correct_answers != null)
                                        @foreach($correct_answers as $correct_answer)
                                            @if($question_bank->correct_answer == $correct_answer->option_text)
                                                <option selected name="correct_answer"
                                                        value="{{ $correct_answer->option_text  }}">{{ $correct_answer->option_text  }}</option>
                                            @else
                                                <option name="correct_answer"
                                                        value="{{ $correct_answer->option_text  }}">{{ $correct_answer->option_text  }}</option>
                                            @endif
                                        @endforeach
                                    @endif

                                </select>

                                @error('correct_answer_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_status"
                                   class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <select class="form-control" name="question_status" id="question_status">
                                    <option
                                        {{($question_bank->question_status==1)?"selected":""}} name="question_status"
                                        value="1">Active
                                    </option>
                                    <option
                                        {{($question_bank->question_status==0)?"selected":""}} name="question_status"
                                        value="0">In-Active
                                    </option>
                                </select>

                                @error('question_status')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-success">
                                    Update Question
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
