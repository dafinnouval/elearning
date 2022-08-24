<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Assignment;
use App\Models\CourseAssignment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $datas = $request->$data;
        // $data = Course::get();
        $data = CourseAssignment::with('assign','course')->orderBy('id','asc')->paginate(10);
        
        return view('index', compact('data'));
    }


    public function create()
    {   
        $getCourse = Course::get();
        $getAssign = Assignment::get();

        return view('create', compact('getCourse', 'getAssign'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
        'course' => 'required',
        'assign' => 'required'
        ]);
        $data = new CourseAssignment();
        $data->course_id = $request->course;
        $data->assignment_id = $request->assign;
        $data->save();
        
        return redirect()->route('index')
        ->with('sukses','has been created successfully.');
    }
    

    public function edit(Request $request, $id)
    {
        $data = CourseAssignment::find($id);

        $getCourse = Course::get();
        $getAssign = Assignment::get();

        return view('edit',compact('getCourse','getAssign','request','data'));
    }
    

    public function update(Request $request, $id)
    {
   
        $data = CourseAssignment::find($id);
        $data->course_id = $request->input('course');
        $data->assignment_id = $request->input('assign');
        $data->save();

        if ($data->save()) {
            return redirect()->route('index')->with('sukses','has been edit successfully.');
            } else {
            return redirect()->back()->with('msg', 'denided update project');
        }
        
    }
   


    public function destroy($id)
    {
        $del = CourseAssignment::where('id', $id)
        ->delete();

        // $company->delete();

        if ($del) {
            return redirect()->route('index')->with('sukses','Company has been deleted successfully');
            // return redirect()->back()->with('msg', 'accept delete project');
        } else {

            return redirect()->back()->with('msg', 'denided delete project');
        }

    }
}

