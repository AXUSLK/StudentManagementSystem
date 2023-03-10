<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportCardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('subjects', SubjectController::class);
    Route::resource('students', StudentController::class);
    Route::get('/attach-subjects/{student}', [StudentController::class, 'getAssignSubjects'])->name('get.attach.subjects');
    Route::post('/attach-subjects/{student}', [StudentController::class, 'postAssignSubjects'])->name('post.attach.subjects');
    Route::get('/add-marks/{subject}/{student}', [SubjectController::class, 'getAddMarks'])->name('get.add.marks');
    Route::post('/add-marks/{subject}/{student}', [SubjectController::class, 'postAddMarks'])->name('post.add.marks');
    Route::get('/report-card', [ReportCardController::class, 'show'])->name('report.show');
    Route::get('/report-card/pdf', [ReportCardController::class, 'createPDF'])->name('report.pdf');;

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
