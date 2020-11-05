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
                        <li class="breadcrumb-item active">Results</li>
                    </ol>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <a href="{{route('result.export')}}" class="btn btn-sm btn-success"> Export To Excel</a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-bold">Results</h3>
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
                        <th>Total Question</th>
                        <th>Correct Answer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->employee_name}}</td>
                            <td>{{$employee->employee_id_no}}</td>
                            <td>{{$employee->designation}}</td>
                            <td>{{$employee->department}}</td>
                            <td>{{ $correct = $exam_paper->where('employee_id',$employee->id)->count() }}</td>
                            <td>{{ $exam_paper->where('employee_id',$employee->id)->where('answer_status',1)->count() }}</td>
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
                        <th>Total Question</th>
                        <th>Correct Answer</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
@endsection
