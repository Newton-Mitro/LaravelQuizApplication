@extends('layouts.admin')

@section('title', 'Segment')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">All Segment</li>
                    </ol>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <a href="{{route('segment.create')}}" class="btn btn-sm btn-success"> New Segment</a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-bold">Segments</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Segment</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($segments as $segment)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$segment->segment_name}}</td>
                            <td>{{($segment->segment_status==1)?"Active":"In-Active"}}</td>
                            <td>
                                <a href="{{route('segment.show',['id'=>$segment->id])}}"
                                   class="btn btn-sm btn-dark"><i
                                        class="fas fa-eye"></i> View</a>
                                <a href="{{route('segment.edit',['id'=>$segment->id])}}"
                                   class="btn btn-sm btn-dark"><i
                                        class="fas fa-pen-square"></i> Edit</a>
                                <a onclick="return confirm('Are you sure?')"
                                   href="{{route('segment.destroy',['id'=>$segment->id])}}"
                                   class="btn btn-sm btn-dark"><i
                                        class="fas fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Segment</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
@endsection
