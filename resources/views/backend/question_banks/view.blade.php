@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Question Information</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('question_bank.index')}}">Questions</a></li>
                        <li class="breadcrumb-item active">{{$question_bank->question_text}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{route('question_bank.edit',$question_bank->id)}}" class="btn btn-sm btn-success">Edit Question</a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <strong> Question Text</strong>
                    <p class="text-muted">
                        {{$question_bank->question_text}}
                    </p>
                    <hr>

                    <strong> Segment</strong>
                    <p class="text-muted">{{$question_bank->segment->segment_name}}</p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
@endsection
