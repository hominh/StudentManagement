<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){
    return view('master');
});*/

Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('/nopermission',['as'=>'nopermission','uses'=>'LoginController@noPermission']);

Route::group(['middleware'=>['authen','roles']],function(){
    Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);
    Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
});

Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function(){
    //Route::get('/createuser',['as'=>'createuser','uses'=>'LoginController@createUser']);
    Route::get('/manage/courses',['as'=>'managecourses','uses'=>'CourseController@getManageCourse']);
    Route::post('/manage/courses/storeacademic',['as'=>'storeacademic','uses'=>'CourseController@storeAcademic']);
    Route::post('/manage/courses/storeprogram',['as'=>'storeprogram','uses'=>'CourseController@storeProgram']);
    Route::post('/manage/courses/storelevel',['as'=>'storelevel','uses'=>'CourseController@storeLevel']);
    Route::post('/manage/courses/storeshift',['as'=>'storeshift','uses'=>'CourseController@storeShift']);
    Route::post('/manage/courses/storetime',['as'=>'storetime','uses'=>'CourseController@storeTime']);
    Route::post('/manage/courses/storebatch',['as'=>'storebatch','uses'=>'CourseController@storeBatch']);
    Route::post('/manage/courses/storegroup',['as'=>'storegroup','uses'=>'CourseController@storeGroup']);
    Route::post('/manage/courses/storeclass',['as'=>'storeclass','uses'=>'CourseController@storeClass']);
    Route::get('/manage/courses/showlevel',['as'=>'showlevel','uses'=>'CourseController@showLevel']);
    Route::get('/manage/courses/showclassinfo',['as'=>'showclassinfo','uses'=>'CourseController@showClassInformation']);
    Route::post('/manage/courses/delclass',['as'=>'delclass','uses'=>'CourseController@delClass']);
    Route::get('/manage/courses/editclass',['as'=>'editclass','uses'=>'CourseController@editClass']);
    Route::post('/manage/courses/updateclass',['as'=>'updateclass','uses'=>'CourseController@updateClass']);

    Route::get('/student/register',['as'=>'student/register','uses'=>'StudentController@getStudentRegister']);
    Route::post('/student/storestudent',['as'=>'storestudent','uses'=>'StudentController@postStudentRegister']);
    Route::get('/payment/search',['as'=>'payment/search','uses'=>'FeeController@getPayment']);

});
