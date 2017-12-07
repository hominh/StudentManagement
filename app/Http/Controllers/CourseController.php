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
        $levels = Level::all();
        return view('courses.managecourses',compact('programs','academics','shifts','batches','times','groups','levels'));
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

    public function showClassInformation(Request $request) {
        //return response($this->classInformation());
        $criterial = array();
        if($request->academic_id != "" && $request->program_id == "") {
            $criterial = array('classes.academic_id'=>$request->academic_id);
        }
        if($request->academic_id == "" && $request->program_id != "") {
            $criterial = array('classes.program_id'=>$request->program_id);
        }
        if($request->academic_id != "" && $request->program_id != "") {
            $criterial = array('classes.academic_id'=>$request->academic_id,'classes.program_id'=>$request->program_id);
        }
        /*else if($request->academic_id != "" && $request->program_id != "" && $request->level_id != "") {
            $criterial = array('academics.id'=>$request->academic_id,'programs.id'=>$request->program_id,'level_id'=>$request->level_id);
        }*/
        //var_dump($criterial);


        $classes = $this->classInformation($criterial);
        return view('popup.classinfo',compact('classes'));
    }

    public function classInformation($criterial) {
        return DB::table('classes')
                    ->join('academics','academics.id','=','classes.academic_id')
                    ->join('levels','levels.id','=','classes.level_id')
                    ->join('shifts','shifts.id','=','classes.shift_id')
                    ->join('times','times.id','=','classes.time_id')
                    ->join('batches','batches.id','=','classes.batch_id')
                    ->join('groups','groups.id','=','classes.group_id')
                    ->join('programs','programs.id','=','classes.program_id')//sai o cho join nay
                    ->where($criterial)
                    ->select('classes.*','academics.name as nameacademic','levels.name as namelevel','levels.program_id as program_id','levels.description as descriptionlevel','shifts.name as nameshift','times.name as nametime','groups.name as namegroup','batches.name as namebatch','programs.name as nameprogram')
                    ->get();
        dd($criterial);

    }

    public function delClass(Request $request) {
        if($request->ajax()) {
            MClass::destroy($request->id);
        }
    }

    public function editClass(Request $request) {
        if($request->ajax()) {
            return response(MClass::find($request->id));
        }
    }

    public function updateClass(Request $request) {
        if($request->ajax()) {
            return response(MClass::updateOrCreate(['id'=>$request->id],$request->all()));
        }
    }

}
