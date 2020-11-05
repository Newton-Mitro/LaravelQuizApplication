@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employee Information</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('employee.index')}}">Employees</a></li>
                        <li class="breadcrumb-item active">{{$employee->employee_name}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-sm btn-success">Edit Employee</a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <strong> Photo</strong>
                    <p class="text-muted">
                        @if($employee->image!=null)
                            <img src="{{$employee->image}}" alt="" width="200px" class="img-thumbnail">
                        @else
                            <img src="{{ asset('dist/img/avatar04.png')}}" alt="" width="200px" class="img-thumbnail">
                        @endif
                    </p>
                    <hr>

                    <strong> Employee Name</strong>
                    <p class="text-muted">
                        {{$employee->employee_name}}
                    </p>
                    <hr>

                    <strong> ID No</strong>
                    <p class="text-muted">{{$employee->employee_id_no}}</p>
                    <hr>

                    <strong> Department</strong>
                    <p class="text-muted">
                        {{$employee->department}}
                    </p>
                    <hr>

                    <strong> Designation</strong>
                    <p class="text-muted">{{$employee->designation}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
