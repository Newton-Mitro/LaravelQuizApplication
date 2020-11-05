<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::orderby('id','DESC')->get();
        return view('backend.departments.index')->with('departments', $departments);
    }

    public function create()
    {
        return view('backend.departments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'department_name' => 'required|string|max:100',
            'department_status' => 'required',
        ]);
        $department = new Department();
        $department->department_name = $request->department_name;
        $department->department_status = $request->department_status;
        $department->save();
        return redirect()->route('department.index')->with('success','A department has been created successfully.');
    }

    public function show($id)
    {
        $department = Department::find($id);
        return view('backend.departments.view')->with('department', $department);
    }

    public function edit($id)
    {
        $department = Department::find($id);
        return view('backend.departments.edit')->with('department', $department);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'department_name' => 'required|string|max:100',
            'department_status' => 'required',
        ]);

        $department = Department::find($id);
        $department->department_name = $request->department_name;
        $department->department_status = $request->department_status;
        $department->save();
        return redirect()->route('department.index')->with('success','A department has been updated successfully.');

    }

    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->route('department.index')->with('success','A department has been deleted successfully.');
    }
}
