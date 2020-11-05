<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::orderby('id','DESC')->get();
        return view('backend.employees.index')->with('employees', $employees);
    }

    public function create()
    {
        return view('backend.employees.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_name' => 'required|string|max:100',
            'employee_status' => 'required',
            'employee_id_no' => 'required',
            'department' => 'required',
            'designation' => 'required',
        ]);
        $employee = new Employee();
        $employee->employee_name = $request->employee_name;
        $employee->employee_status = $request->employee_status;
        $employee->employee_id_no = $request->employee_id_no;
        $employee->department = $request->department;
        $employee->designation = $request->designation;
        $employee->save();
        return redirect()->route('employee.index')->with('success','A employee has been created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return view('backend.employees.view')->with('employee', $employee);
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('backend.employees.edit')->with('employee', $employee);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'employee_name' => 'required|string|max:100',
            'employee_status' => 'required',
            'employee_id_no' => 'required',
            'department' => 'required',
            'designation' => 'required',
        ]);

        $employee = Employee::find($id);
        $employee->employee_name = $request->employee_name;
        $employee->employee_status = $request->employee_status;
        $employee->employee_id_no = $request->employee_id_no;
        $employee->department = $request->department;
        $employee->designation = $request->designation;
        $employee->save();
        return redirect()->route('employee.index')->with('success','A employee has been updated successfully.');

    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index')->with('success','A employee has been deleted successfully.');
    }
}
