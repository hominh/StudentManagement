<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudentRegister() {
        return view('student.studentregister');
    }
    public function postStudentRegister(Request $request) {
        return $request->all();
    }
}
