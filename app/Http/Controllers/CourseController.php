<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\Shift;
use App\Time;
use App\Batch;
use App\Group;
use App\MClass;
use Auth;
use DB;

class CourseController extends Controller
{
    public function __construct() {
        $this->middleware('web');
    }

    public function getManageCourse() {
        $programs = Program::all();
        $academics = Academic::all();
        $shifts = Shift::all();
        $batches = Batch::all();
        $groups = Group::all();
        $times = Time::all();
        return view('courses.managecourses',compact('programs','academics','shifts','batches','times','groups'));
    }

    public function storeAcademic(Request $request) {
        $this->validate($request, [
            'name' => 'required|unique:academics|min:3',
        ]);
        if($request->ajax()) {
            return response(Academic::create($request->all()));
        }
    }

    public function storeLevel(Request $request) {
        if($request->ajax()) {
            return response(Level::create($request->all()));
        }
    }

    public function storeProgram(Request $request) {
        if($request->ajax()) {
            return response(Program::create($request->all()));
        }
    }

    public function storeShift(Request $request) {
        if($request->ajax()) {
            return response(Shift::create($request->all()));
        }
    }

    public function storeTime(Request $request) {
        if($request->ajax()) {
            return response(Time::create($request->all()));
        }
    }

    public function storeBatch(Request $request) {
        if($request->ajax()) {
            return response(Batch::create($request->all()));
        }
    }

    public function storeGroup(Request $request) {
        if($request->ajax()) {
            return response(Group::create($request->all()));
        }
    }

    public function storeClass(Request $request) {
        if($request->ajax()) {
            return response(MClass::create($request->all()));
        }
    }

    public function showLevel(Request $request) {
        if($request->ajax()) {
            return response(Level::where('program_id','=',$request->program_id)->get()); //find level by program
        }
    }

}
