@extends('layouts.admin')

@section('title', 'Employee')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">All Employee</li>
                    </ol>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <a href="{{route('employee.create')}}" class="btn btn-sm btn-success"> New Employee</a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-bold">Employees</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Employee Name</th>
                        <th>Employee ID</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$employee->employee_name}}</td>
                            <td>{{$employee->employee_id_no}}</td>
                            <td>{{$employee->designation}}</td>
                            <td>{{$employee->department}}</td>
                            <td>
                                <a href="{{route('employee.show',['id'=>$employee->id])}}" class="btn btn-sm btn-dark"><i
                                            class="fas fa-eye"></i> View</a>
                                <a href="{{route('employee.edit',['id'=>$employee->id])}}" class="btn btn-sm btn-dark"><i
                                            class="fas fa-pen-square"></i> Edit</a>
                                <a onclick="return confirm('Are you sure?')" href="{{route('employee.destroy',['id'=>$employee->id])}}" class="btn btn-sm btn-dark"><i
                                            class="fas fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Employee Name</th>
                        <th>Employee ID</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
@endsection
