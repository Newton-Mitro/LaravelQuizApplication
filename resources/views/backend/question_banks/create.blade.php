@extends('layouts.admin')

@section('department_name', 'Page Title')

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
                        <li class="breadcrumb-item active">Create</li>
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
                <h3 class="card-department_name text-bold">New Question</h3>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form method="POST" action="{{ route('question_bank.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="segment_id"
                                   class="col-md-4 col-form-label text-md-right">Segment</label>

                            <div class="col-md-6">
                                <select class="form-control" name="segment_id" id="segment_id">
                                    <option name="segment_id">Select Segment</option>
                                    @foreach($segments as $segment)
                                        <option name="segment_id"
                                                value="{{$segment->id}}">{{$segment->segment_name}}</option>
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
                                       value="{{ old('question_text') }}" autocomplete="department_name" autofocus>

                                @error('question_text')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="correct_answer" class="col-md-4 col-form-label text-md-right">Correct
                                Answer</label>

                            <div class="col-md-6">
                                <input id="correct_answer" type="text"
                                       class="form-control @error('correct_answer') is-invalid @enderror"
                                       name="correct_answer"
                                       value="{{ old('correct_answer') }}" autocomplete="correct_answer" autofocus>

                                @error('correct_answer')
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
                                    <option name="question_status" value="1">Active</option>
                                    <option name="question_status" value="0">In-Active</option>
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
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
