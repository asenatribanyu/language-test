<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\EPT_DirectionController;
use App\Models\Exam;
use App\Models\User;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EPT_QuestionController;
use App\Http\Controllers\EPT_StoryController;
use App\Http\Controllers\EptAnswerController;
use App\Http\Controllers\Exam_OpenController;
use App\Http\Controllers\TOEIC_DirectionController;
use App\Http\Controllers\TOEIC_QuestionController;
use App\Http\Controllers\TOEIC_StoryController;
use App\Http\Controllers\ToeicAnswerController;
use App\Models\Enroll;

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
    Route::resource('/dashboard/update-profile', ProfileController::class)->middleware('block.update.profile');

    Route::get('/dashboard', function () {
        return view('user.dashboard', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::resource('/profile', ProfileController::class);

    Route::get('/dashboard/profile', function () {
        return view('user/profile', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/contact-us', function () {
        return view('user/contactUs', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/purchase', function () {
        return view('user/purchase', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-history-ept', function () {
        return view('user/testHistoryEPT', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-history-toeic', function () {
        return view('user/testHistoryTOEIC', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-guide', function () {
        return view('user/testGuide', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/ept/waiting-area/jadwal', function () {
        return view('user/exam/examJadwal', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'exams' => Exam::where('category', 'ept')->where('activated', 'yes')->first(),
            'warningCard' => true,
        ]);
    })->middleware('set.schedule:ept');
    
    Route::get('/dashboard/toeic/waiting-area/jadwal', function () {
        return view('user/exam/examJadwal', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'exams' => Exam::where('category', 'toeic')->where('activated', 'yes')->first(),
            'warningCard' => true,
        ]);
    })->middleware('set.schedule:toeic');

    Route::resource('/dashboard/waiting-area/jadwal', EnrollController::class);

    Route::get('/fetch/enroll/start', [EnrollController::class, 'getButton']);

    Route::get('/dashboard/ept/waiting-area/enroll', function () {
        return view('user/exam/examEnroll', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'exams' => Exam::where('activated', 'yes')->where('category', 'ept')->first(),
            'enrolls' => Enroll::where('user_id', auth()->user()->id)->where('for', 'ept')->latest()->first(),
            'warningCard' => true,
        ]);
    });

    Route::get('/dashboard/toeic/waiting-area/enroll', function () {
        return view('user/exam/examEnroll', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'exams' => Exam::where('activated', 'yes')->where('category', 'toeic')->first(),
            'enrolls' => Enroll::where('user_id', auth()->user()->id)->where('for', 'toeic')->latest()->first(),
            'warningCard' => true,
        ]);
    });
});

// Admin Dashboard
Route::get('admin/dashboard', function () {
    return view('admin/dashboard', [
        'profile' => User::where('id', auth()->user()->id)->first(),
        'exams' => Exam::get(),
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

Route::get('/fetch/ept/story/{section}', [EPT_QuestionController::class, 'getStory']);

Route::resource('admin/dashboard/exam/toeic/direction', TOEIC_DirectionController::class);

Route::resource('admin/dashboard/exam/toeic/story', TOEIC_StoryController::class);

Route::resource('admin/dashboard/exam/toeic/question', TOEIC_QuestionController::class);

Route::get('/fetch/toeic/story/{section}', [TOEIC_QuestionController::class, 'getStory']);

Route::post('/post/toeic/story',[TOEIC_StoryController::class, 'upload'])->name('ckeditor.upload');

Route::post('/post/exam/update-activated/{exam}', [ExamController::class, 'updateActivated']);

Route::get('/fetch/exam/activated', [ExamController::class, 'fetchActivated']);

// Exam Control
Route::resource('admin/dashboard/exam/control', Exam_OpenController::class);

// User EPT Exam Starting
Route::resource('exam/ept/start', EptAnswerController::class);

Route::get('/fetch/exam/ept/answer', [EptAnswerController::class, 'fetchAnswer']);

Route::post('/post/exam/ept/answer', [EptAnswerController::class, 'postAnswer']);

Route::get('/fetch/exam/ept/question/audio', [EptAnswerController::class, 'fetchQuestionPlayButton']);

Route::post('/post/exam/ept/question/audio', [EptAnswerController::class, 'postQuestionPlayButton']);

Route::get('/fetch/exam/ept/story/audio', [EptAnswerController::class, 'fetchStoryPlayButton']);

Route::post('/post/exam/ept/story/audio', [EptAnswerController::class, 'postStoryPlayButton']);

// User TOEIC Exam Starting
Route::resource('exam/toeic/start', ToeicAnswerController::class);

Route::get('/fetch/exam/toeic/answer', [ToeicAnswerController::class, 'fetchAnswer']);

Route::post('/post/exam/toeic/answer', [ToeicAnswerController::class, 'postAnswer']);

Route::get('/fetch/exam/toeic/question/audio', [ToeicAnswerController::class, 'fetchQuestionPlayButton']);

Route::post('/post/exam/toeic/question/audio', [ToeicAnswerController::class, 'postQuestionPlayButton']);

Route::get('/fetch/exam/toeic/story/audio', [ToeicAnswerController::class, 'fetchStoryPlayButton']);

Route::post('/post/exam/toeic/story/audio', [ToeicAnswerController::class, 'postStoryPlayButton']);

// Exam Finish Result
Route::get('exam/ept/result', function () {
    return view('user/exam/examFinish', [
        'profile' => User::where('id', auth()->user()->id)->first(),
        'warningCard' => false,
        'result' => true,
        'category' => 'ept',
    ]);
});

Route::get('exam/toeic/result', function () {
    return view('user/exam/examFinish', [
        'profile' => User::where('id', auth()->user()->id)->first(),
        'warningCard' => false,
        'result' => true,
        'category' => 'toeic',
    ]);
});