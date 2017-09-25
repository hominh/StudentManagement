<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use Auth;

class CourseController extends Controller
{
    public function __construct() {
        $this->middleware('web');
    }

    public function getManageCourse() {
        $programs = Program::all();
        $academics = Academic::all();
        return view('courses.managecourses',compact('programs','academics'));
    }

    public function storeAcademic(Request $request) {
        $this->validate($request, [
            'name' => 'required|unique:academics|min:3',
        ]);
        $request->user_id = Auth::user()->id;
        if($request->ajax()) {
            return response(Academic::create($request->all()));
        }
    }

    public function storeProgram(Request $request) {
        if($request->ajax()) {
            return response(Program::create($request->all()));
        }
    }

}
