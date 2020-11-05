<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::orderby('id','DESC')->get();
        return view('backend.designations.index')->with('designations', $designations);
    }

    public function create()
    {
        return view('backend.designations.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'designation_name' => 'required|string|max:100',
            'designation_status' => 'required',
        ]);
        $designation = new Designation();
        $designation->designation_name = $request->designation_name;
        $designation->designation_status = $request->designation_status;
        $designation->save();
        return redirect()->route('designation.index')->with('success','A designation has been created successfully.');
    }

    public function show($id)
    {
        $designation = Designation::find($id);
        return view('backend.designations.view')->with('designation', $designation);
    }

    public function edit($id)
    {
        $designation = Designation::find($id);
        return view('backend.designations.edit')->with('designation', $designation);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'designation_name' => 'required|string|max:100',
            'designation_status' => 'required',
        ]);

        $designation = Designation::find($id);
        $designation->designation_name = $request->designation_name;
        $designation->designation_status = $request->designation_status;
        $designation->save();
        return redirect()->route('designation.index')->with('success','A designation has been updated successfully.');

    }

    public function destroy($id)
    {
        $designation = Designation::find($id);
        $designation->delete();
        return redirect()->route('designation.index')->with('success','A designation has been deleted successfully.');
    }
}
