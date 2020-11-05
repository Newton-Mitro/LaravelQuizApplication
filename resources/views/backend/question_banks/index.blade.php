@extends('layouts.admin')

@section('title', 'Question')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">All Question</li>
                    </ol>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <a href="{{route('question_bank.create')}}" class="btn btn-sm btn-success"> New Question</a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-bold">Questions</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Question Text</th>
                        <th>Question Segment</th>
                        <th>Correct Answer</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($question_banks as $question_bank)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$question_bank->question_text}}</td>
                            <td>{{$question_bank->segment->segment_name}}</td>
                            <td>{{ $question_bank->correct_answer }}</td>
                            <td>
                                <a href="{{route('question_bank.show',['id'=>$question_bank->id])}}"
                                   class="btn btn-sm btn-dark"><i
                                        class="fas fa-eye"></i> View</a>
                                <a href="{{route('question_bank.edit',['id'=>$question_bank->id])}}"
                                   class="btn btn-sm btn-dark"><i
                                        class="fas fa-pen-square"></i> Edit</a>
                                <a onclick="return confirm('Are you sure?')"
                                   href="{{route('question_bank.destroy',['id'=>$question_bank->id])}}"
                                   class="btn btn-sm btn-dark"><i
                                        class="fas fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Question Text</th>
                        <th>Question Segment</th>
                        <th>Correct Answer</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
@endsection
