@extends('layouts.app')

@section('department_name', 'Page Title')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card pb-5">
                    <div class="card-body">
                        <form method="POST" action="{{ route('employee_details') }}">
                            @csrf
                            <div class="welcome-message text-center mb-5 mt-5">
                                <img src="{{ asset('dist/img/logo.png')}}" alt="" width="150px">
                                <h2>The Christian Co-Operative Credit Union Ltd, Dhaka.</h2>
                            </div>
                            <div class="form-group row pt-5">
                                <label for="employee_id_no" class="col-md-4 col-form-label text-md-right">Employee ID
                                    No</label>

                                <div class="col-md-6">
                                        <input id="employee_id_no" type="number"
                                               class="form-control @error('employee_id_no') is-invalid @enderror"
                                               name="employee_id_no" value="{{ old('employee_id_no') }}" required
                                               autocomplete="employee_id_no" autofocus>

                                    @error('employee_id_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
