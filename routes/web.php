<?php

use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\ProfileController;
use App\Models\Resume;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

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



Route::get('/sdashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('skills', SkillController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::resource('education', EducationController::class);
    Route::resource('resumes', ResumeController::class);
    Route::get('download/{resume}', [ResumeController::class, 'download']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {
        $data['resume'] = Resume::find(1);
        $pdf = Pdf::loadView('resume', $data);
        return $pdf->stream();
        return view('resume');
    });
});

require __DIR__ . '/auth.php';
