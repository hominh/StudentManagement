<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('web');
    }

    public function dashboard() {
        return view('master');
        //echo "123";
        /*Excel::create('aaa', function($excel) {

            $excel->sheet('1', function($sheet) {

                // Sheet manipulation

            });

        })->export('xls');*/

    }
}
