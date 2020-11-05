<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Segment;
use Illuminate\Http\Request;

class SegmentsController extends Controller
{
    public function index()
    {
        $segments = Segment::orderby('id','DESC')->get();
        return view('backend.segments.index')->with('segments', $segments);
    }

    public function create()
    {
        return view('backend.segments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'segment_name' => 'required|string|max:100',
            'segment_status' => 'required',
        ]);
        $segment = new Segment();
        $segment->segment_name = $request->segment_name;
        $segment->segment_status = $request->segment_status;
        $segment->save();
        return redirect()->route('segment.index')->with('success','A segment has been created successfully.');
    }

    public function show($id)
    {
        $segment = Segment::find($id);
        return view('backend.segments.view')->with('segment', $segment);
    }

    public function edit($id)
    {
        $segment = Segment::find($id);
        return view('backend.segments.edit')->with('segment', $segment);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'segment_name' => 'required|string|max:100',
            'segment_status' => 'required',
        ]);

        $segment = Segment::find($id);
        $segment->segment_name = $request->segment_name;
        $segment->segment_status = $request->segment_status;
        $segment->save();
        return redirect()->route('segment.index')->with('success','A segment has been updated successfully.');

    }

    public function destroy($id)
    {
        $segment = Segment::find($id);
        $segment->delete();
        return redirect()->route('segment.index')->with('success','A segment has been deleted successfully.');
    }
}
