@extends('layouts.admin')

@section('segment_name', 'Page Title')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('segment.index')}}">Segments</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <a href="{{route('segment.index')}}" class="btn btn-sm btn-dark">Segments</a>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-segment_name text-bold">New Segment</h3>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form method="POST" action="{{ route('segment.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="segment_name" class="col-md-4 col-form-label text-md-right">Segment Name</label>

                            <div class="col-md-6">
                                <input id="segment_name" type="text"
                                       class="form-control @error('segment_name') is-invalid @enderror" name="segment_name"
                                       value="{{ old('segment_name') }}" autocomplete="segment_name" autofocus>

                                @error('segment_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="segment_status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <select class="form-control" name="segment_status" id="segment_status">
                                    <option name="segment_status" value="1">Active</option>
                                    <option name="segment_status" value="0">In-Active</option>
                                </select>

                                @error('segment_status')
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
