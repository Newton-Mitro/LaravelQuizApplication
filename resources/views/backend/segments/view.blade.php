@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Segment Information</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('segment.index')}}">Segments</a></li>
                        <li class="breadcrumb-item active">{{$segment->segment_name}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{route('segment.edit',$segment->id)}}" class="btn btn-sm btn-success">Edit Segment</a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <strong>Segment Name</strong>
                    <p class="text-muted">
                        {{$segment->segment_name}}
                    </p>
                    <hr>

                    <strong>Status</strong>
                    <p class="text-muted">{{($segment->segment_status == 1)?"Active":"In-Active"}}</p>


                </div>
            </div>
        </div>
    </section>
@endsection
