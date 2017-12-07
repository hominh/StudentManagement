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
use App\Student;
use App\Status;
use App\FileUpload;
use Storage;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use File;

class StudentController extends Controller
{
    public function getStudentRegister() {
        $programs = Program::all();
        $academics = Academic::all();
        $shifts = Shift::all();
        $batches = Batch::all();
        $groups = Group::all();
        $times = Time::all();
        $levels = Level::all();
        return view('student.studentregister',compact('programs','academics','shifts','batches','groups','times','levels'));
    }
    public function postStudentRegister(Request $request) {
        $student = new Student;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->sex = $request->sex;
        $student->dob = $request->dob;
        $student->rac = $request->rac;
        $student->email = $request->email;
        $student->status = $request->status;
        $student->nationality = $request->nationality;
        $student->nationality_card = $request->nationality_card;
        $student->passport = $request->passport;
        $student->phone = $request->phone;
        $student->village = $request->village;
        $student->commune = $request->commune;
        $student->district = $request->district;
        $student->province = $request->province;
        $student->current_address = $request->current_address;
        $student->dateregisted = $request->dateregisted;
        $student->user_id = $request->user_id;
        $student->photo = FileUpload::photo($request,'photo');

        if($student->save()) {
            $student_id = $student->id;
            Status::insert(['student_id'=>$student_id,'class_id'=>$request->class_id,'user_id'=>$request->user_id]);
        }
        //Lam tiep
    }
}
