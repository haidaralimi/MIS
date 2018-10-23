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

Route::get('/', function () {
    return view('login');
});
//route for dash
Route::get('dash',function(){
	return view('dash');
});
//route for create university
Route::get('create_university',function(){
	return view('create_university');
});
//route for university list
Route::get('university_list',function(){
	return view('university_list');
});
//route for create faculty
Route::get('create_faculty',function(){
	return view('create_faculty');
});
//route for faculty list
Route::get('faculty_list',function(){
	return view('faculty_list');
});

//route for add responsiable
Route::get('add_faculty_responsiable',function(){
	return view('add_faculty_responsiable');
});
//route for faculty responsible list
Route::get('faculty_responsiable_list',function (){
    return view('faculty_responsiable_list');
});
//route for create department
Route::get('create_department',function(){
	return view('create_department');
});
//route for existing department
Route::get('existing_department',function(){
	return view('existing_department');
});
//route for accepted departments
Route::get('accepted_department',function(){
	return view('accepted_department');
});
//route for rejected department
Route::get('rejected_department',function(){
	return view('rejected_department');
});
//route for create user
Route::get('create_user',function (){
   return view('create_user');
});
//route for login page
Route::get('login',function (){
   return view('login');
});

// route for history

Route::get('history',function (){
   return view('history');
});

//route for test
Route::get('test',function (){
  return view('test');
});
//route for user list
Route::get('user_list',function (){
   return view('user_list');
});

//route for change password
Route::get('change_password',function (){
   return view('change_password');
});
//route for create university responsiable
Route::get('create_university_responsiable',function (){
   return view('create_university_responsiable');
});
//route for university responsiable list
Route::get('university_responsiable_list',function (){
   return view('university_responsiable_list');
});

//route for university reports
Route::get('university_reports',function (){
   return view('university_reports');
});
//route for create reports
Route::get('create_reports',function (){
   return view('create_reports');
});