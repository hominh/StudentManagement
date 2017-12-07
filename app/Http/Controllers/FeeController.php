<?php
/**
 * Created by PhpStorm.
 * User: hominh
 * Date: 07/12/2017
 * Time: 22:54
 */
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    class FeeController extends Controller{
        public function index() {

        }

        public function getPayment() {
            return view('fee.searchpayment');
        }

        public function postSearchPayment() {
            
        }
    }