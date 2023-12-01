<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\User;

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

    Route::resource('profile', ProfileController::class);

    Route::get('/dashboard/profile', function () {
        return view('pages/profile', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/contact-us', function () {
        return view('pages/contact-us', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/purchase', function () {
        return view('pages/purchase', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-history-ept', function () {
        return view('pages/test-history-ept', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-history-toeic', function () {
        return view('pages/test-history-toeic', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/test-guide', function () {
        return view('pages/test-guide', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });

    Route::get('/dashboard/waiting-area-jadwal', function () {
        return view('pages/waiting-area-jadwal', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    });
});

Route::get('/dashboard/update-profile', [ProfileController::class, '__invoke']);

// Peningkatan UI - Dos
Route::get('admin/dashboard', function () {
    return view('admin/dashboard', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/manage-users', function () {
    return view('admin/manageUser', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/exam/ept', function () {
    return view('admin/manageExam', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/exam/toeic', function () {
    return view('admin/manageExam', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

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

Route::get('admin/dashboard/create/exam', function () {
    return view('admin/exam/createExam', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/direction', function () {
    return view('admin/exam/uploadDirection', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/story-text', function () {
    return view('admin/exam/uploadStoryText', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/story-audio', function () {
    return view('admin/exam/uploadStoryAudio', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/question/listening-a', function () {
    return view('admin/exam/uploadListeningA', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/question/listening-b', function () {
    return view('admin/exam/uploadListeningB', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/question/listening-c', function () {
    return view('admin/exam/uploadListeningC', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/question/structure-expression', function () {
    return view('admin/exam/uploadStructureEx', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/question/written-expression', function () {
    return view('admin/exam/uploadWrittenEx', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::get('admin/dashboard/create/exam/question/reading-comperhension', function () {
    return view('admin/exam/uploadReadingComp', [
        'profile' => User::where('id', auth()->user()->id)->first(),
    ]);
});