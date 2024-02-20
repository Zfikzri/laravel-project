<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ExtraculiculerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\HomeLogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardGradeController;
use App\Http\Controllers\DashboardStudentController;
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



Route::get('/hello', function () {
    return ('Hello World');
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "nama" => "Zidni Fikri As Sidqi",
        "kelas" => "11 PPLG 1",
        "foto" => "foto.jpg",

    ]);
});



Route::get('/homelog',[HomeLogController::class,'index']);
Route::get('/home',[HomeController::class,'index']);

Route::get('/extraculiculer', [ExtraculiculerController::class, 'index']);

Route::group(["prefix" => "/student"],function (){
    Route::get('/all', [\App\Http\Controllers\StudentsController::class,'index'])->name('student.all',);
    Route::get('/detail/{student}',[\App\Http\Controllers\StudentsController::class,'show']);
    Route::get('/create',[\App\Http\Controllers\StudentsController::class,'create'])->middleware('auth');
    Route::post('/add',[\App\Http\Controllers\StudentsController::class,'store'])->middleware('auth');
    Route::delete('/delete/{student}',[\App\Http\Controllers\StudentsController::class,'destroy'])->middleware('auth');
    Route::get('/edit/{id}', [\App\Http\Controllers\StudentsController::class,'edit'])->name('student.edit')->middleware('auth');
    Route::post("/update/{id}",[\App\Http\Controllers\StudentsController::class,'update'])->middleware('auth');
});

Route::group(["prefix" => "/class"],function (){
    Route::get('/all',[\App\Http\Controllers\GradeController::class,'index'])-> name('class.all');
    Route::get('/create',[\App\Http\Controllers\GradeController::class,'create'])->middleware('auth');
    Route::post('/add',[\App\Http\Controllers\GradeController::class,'store'])->middleware('auth');
    Route::delete('/delete/{class}', [\App\Http\Controllers\GradeController::class, 'destroy'])->middleware('auth');
    Route::get('/edit/{id}', [\App\Http\Controllers\GradeController::class,'edit'])->name('class.edit')->middleware('auth');
    Route::post('/update/{id}', [\App\Http\Controllers\GradeController::class, 'update'])->middleware('auth');
    
});




Route::group(["prefix" => "/login"], function () {
    Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('login');
    Route::post('/in', [LoginController::class, 'authenticate']);
    
});

Route::group(["prefix" => "/register"], function () {
    Route::get('/', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/', [RegisterController::class, 'store']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::group(["prefix" => "/dashboard"],function (){
    Route::get('/index',function (){
        return view('dashboard.index',[
            'title' => 'Dashboard'
        ]);
    }) -> middleware('auth');

    Route::group(["prefix" => "/student"],function (){
        Route::get('/all', [DashboardStudentController::class,'index'])->name('student.all',)->middleware('auth');
        Route::get('/detail/{student}',[DashboardStudentController::class,'show']);
        Route::get('/create',[DashboardStudentController::class,'create']) -> middleware('auth');
        Route::post('/add',[DashboardStudentController::class,'store']) -> middleware('auth');
        Route::delete('/delete/{student}',[DashboardStudentController::class,'destroy']) -> middleware('auth');
        Route::get('/edit/{id}', [DashboardStudentController::class,'edit'])->name('student.edit') -> middleware('auth');
        Route::post("/update/{id}",[DashboardStudentController::class,'update']) -> middleware('auth');
    });

    Route::group(["prefix" => "/class"],function (){
        Route::get('/all',[DashboardGradeController::class,'index'])-> name('class.all')->middleware('auth');
        Route::get('/create',[DashboardGradeController::class,'create'])-> middleware('auth');
        Route::post('/add',[DashboardGradeController::class,'store'])-> middleware('auth');
        Route::delete('/delete/{class}', [DashboardGradeController::class, 'destroy'])-> middleware('auth');
        Route::get('/edit/{id}', [DashboardGradeController::class,'edit'])->name('class.edit')-> middleware('auth');
        Route::post('/update/{id}', [DashboardGradeController::class, 'update'])-> middleware('auth');
    });

});