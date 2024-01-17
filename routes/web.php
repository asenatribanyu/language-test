<?php

use App\Http\Controllers\EPT_DirectionController;
use App\Models\Exam;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EPT_QuestionController;
use App\Http\Controllers\EPT_StoryController;
use App\Http\Controllers\TOEIC_DirectionController;
use App\Http\Controllers\TOEIC_QuestionController;
use App\Http\Controllers\TOEIC_StoryController;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::resource('/profile', ProfileController::class);

    Route::get('/dashboard/profile', function () {
        return view('pages/profile', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/contact-us', function () {
        return view('pages/contactUs', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/purchase', function () {
        return view('pages/purchase', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-history-ept', function () {
        return view('pages/testHistoryEPT', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-history-toeic', function () {
        return view('pages/testHistoryTOEIC', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-guide', function () {
        return view('pages/testGuide', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/waiting-area-jadwal', function () {
        return view('pages/waitingAreaJadwal', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'warningCard' => true,
        ]);
    });

    Route::get('/dashboard/waiting-area-enroll', function () {
        return view('pages/waitingAreaEnroll', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'warningCard' => true,
        ]);
    });
});

Route::get('/dashboard/update-profile', [ProfileController::class, '__invoke']);

// Admin Dashboard
Route::get('admin/dashboard', function () {
    return view('admin/dashboard', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

// Manage Users
Route::get('admin/dashboard/manage-users', function () {
    return view('admin/manageUser', [
        'profile' => User::where('id', auth()->user()->id)->first(),
        'getUsers' => User::whereIn('role', ['test taker', 'guest'])->get(),
    ]);
});

Route::get('admin/dashboard/manage-users/edit/{id}', [UserController::class, 'edit']);

Route::put('admin/dashboard/manage-users/update/{id}',  [UserController::class, 'update']);

Route::delete('admin/dashboard/manage-users/delete/{id}', [UserController::class, 'destroy']);

// Manage Exams
Route::get('admin/dashboard/exam/ept', function () {
    return view('admin/exam/ept/manageExam', [
        'profile' => User::where('id', auth()->user()->id)->first(),
        'exams' => Exam::where('category', 'ept')->get(),
    ]);
});

Route::get('admin/dashboard/exam/toeic', function () {
    return view('admin/exam/toeic/manageExam', [
        'profile' => User::where('id', auth()->user()->id)->first(),
        'exams' => Exam::where('category', 'toeic')->get(),
    ]);
});

Route::resource('admin/dashboard/exam', ExamController::class);

// Manage Practice
Route::get('admin/dashboard/practice/ept', function () {
    return view('admin/managePractice', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/practice/toeic', function () {
    return view('admin/managePractice', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::resource('admin/dashboard/exam/ept/direction', EPT_DirectionController::class);

Route::resource('admin/dashboard/exam/ept/story', EPT_StoryController::class);

Route::resource('admin/dashboard/exam/ept/question', EPT_QuestionController::class);

Route::get('/fetch/ept/story', [EPT_QuestionController::class, 'getStory']);

Route::resource('admin/dashboard/exam/toeic/direction', TOEIC_DirectionController::class);

Route::resource('admin/dashboard/exam/toeic/story', TOEIC_StoryController::class);

Route::resource('admin/dashboard/exam/toeic/question', TOEIC_QuestionController::class);

Route::get('/fetch/toeic/story', [TOEIC_QuestionController::class, 'getStory']);

Route::get('admin/dashboard/exam-control', function () {
    return view('admin/examControl', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

// Exam Starting
Route::get('exam/starting-test', function () {
    return view('examEPT/testEPT', [
        'profile' => User::where('id', auth()->user()->id)->first(),
        'warningCard' => false,
    ]);
});