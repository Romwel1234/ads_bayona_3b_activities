<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
  use App\models\student;
  use Illuminate\Support\Facades\Route\

 Route::get('/student/create',function () {
    Sstudent = new student();
    Sstudent->first_name = 'john';
    Sstudent->last_name = 'Doe';
    Sstudent->email = 'Johndoe@example.com';
    Sstudent->save();
    return 'student created';
});

Route::get('/student',function () {
    Sstudent = student::all();
    return 

