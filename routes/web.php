<?php

use Illuminate\Support\Facades\Route;
use App\models\student;

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

Route::get('/',function(){
    $student = new student();
    $student->first_name = 'john';
    $student->last_name = 'Doe';
    $student->email = 'Johndoe@example.com';
    $student->save();
    return 'student created';
});

