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
                        <li class="breadcrumb-item active"><a href="{{route('employee.index')}}">Employees</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <a href="{{route('employee.index')}}" class="btn btn-sm btn-dark">Employees</a>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-department_name text-bold">Edit Employee</h3>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form method="POST" action="{{ route('employee.update',['id'=>$employee->id]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="department"
                                   class="col-md-4 col-form-label text-md-right">Department</label>

                            <div class="col-md-6">
                                <input id="department" type="text"
                                       class="form-control @error('department') is-invalid @enderror"
                                       name="department"
                                       value="{{ $employee->department }}" autocomplete="department" autofocus>

                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="employee_name" class="col-md-4 col-form-label text-md-right">Employee
                                Name</label>

                            <div class="col-md-6">
                                <input id="employee_name" type="text"
                                       class="form-control @error('employee_name') is-invalid @enderror"
                                       name="employee_name"
                                       value="{{ $employee->employee_name }}" autocomplete="department_name" autofocus>

                                @error('employee_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="employee_id_no" class="col-md-4 col-form-label text-md-right">Employee
                                ID No</label>

                            <div class="col-md-6">
                                <input id="employee_id_no" type="text"
                                       class="form-control @error('employee_id_no') is-invalid @enderror"
                                       name="employee_id_no"
                                       value="{{ $employee->employee_id_no }}" autocomplete="employee_id_no" autofocus>

                                @error('employee_id_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="designation"
                                   class="col-md-4 col-form-label text-md-right">Designation</label>

                            <div class="col-md-6">
                                <input id="designation" type="text"
                                       class="form-control @error('designation') is-invalid @enderror"
                                       name="designation"
                                       value="{{ $employee->designation }}" autocomplete="designation" autofocus>

                                @error('designation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="employee_status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <select class="form-control" name="employee_status" id="employee_status">
                                    <option name="employee_status" value="1">Active</option>
                                    <option name="employee_status" value="0">In-Active</option>
                                </select>

                                @error('employee_status')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-success">
                                    Update Employee
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
