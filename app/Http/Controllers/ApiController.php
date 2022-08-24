<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Assignment;
use App\Models\CourseAssignment;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class ApiController extends Controller
{
    public function index()
    {
        // $courseAssign = CourseAssignment::orderBy('created_at', 'DESC');
        $courseAssign = CourseAssignment::get();
        // $response = [
        //     'message' => 'Data Course Assignment',
        //     'data' => $courseAssign,
        // ];
        return response([
            'success' => true,
            'message' => 'List Semua Data',
            'data' => $courseAssign
        ], 200);
        // return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        $courseAssign = new CourseAssignment();
        $courseAssign->course_id = $request->course;
        $courseAssign->assignment_id = $request->assign;
        $courseAssign->save();
        
        return response([
            'success' => true,
            'message' => 'Tambah Data',
            'data' => $courseAssign
        ], 200);
    }



    public function update(Request $request, $id)
    {
        // $getCourse = $request->course;
        // $getAssign = $request->assign;

        $courseAssign = CourseAssignment::find($id);
        $courseAssign->course_id = $request->input('course');
        $courseAssign->assignment_id = $request->input('assign');
        $courseAssign->save();
        // $courseAssign->course_id = $getCourse;
        // $courseAssign->assignment_id = $getAssign;

        return response()->json([
            "success" => true,
            "message" => "Data telah diubah.",
            "data" => $courseAssign,
        ], 200);
    }

    public function destroy($id)
    {
        // $deletedRows = Buku::where('kode_buku', $kode_buku)->delete();
        $del = CourseAssignment::find($id);
        $del->delete();

        return response()->json([
            "success" => true,
            "message" => "Data berhasil dihapus.",
            "data" => $del,
        ], 200);
    }
}