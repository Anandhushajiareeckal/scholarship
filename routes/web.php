<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
// Frontend
Route::get("/","App\Http\Controllers\FrontendController@index");
Route::get("/scholarships","App\Http\Controllers\FrontendController@scholarships");
Route::get("/scholarship_questions/{id}/{user}","App\Http\Controllers\FrontendController@scholarship_questions")->name('scholarships_question');
Route::get("/sample","App\Http\Controllers\FrontendController@sample");

Route::post("/scholarship_qa","App\Http\Controllers\FrontendController@scholarships_question_store")->name('scholarships_question_store')->middleware('auth');
Route::get("/scholarship-registration","App\Http\Controllers\FrontendController@scholarships_registration")->name('scholarships_registration')->middleware('auth');
Route::get("/example","App\Http\Controllers\FrontendController@example");
Route::get("/data_testing","App\Http\Controllers\FrontendController@data_testing");

//quiz
Route::get("/quiz_cat","App\Http\Controllers\FrontendController@quiz_cat")->middleware('auth');
Route::get("/quiz_questions/{id}","App\Http\Controllers\FrontendController@quiz_questions")->name('quiz_question');

//mock test 

Route::get("/mock_cat","App\Http\Controllers\FrontendController@mock_cat")->middleware('auth');
Route::get("/mock_questions/{id}","App\Http\Controllers\FrontendController@mock_questions")->name('mock_question');



Route::get("/quiz/{id}","App\Http\Controllers\FrontendController@quiz");

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get("/import_data","App\Http\Controllers\ImportController@import")->name('import');



// Admin
Route::get("/admin/dashboard","App\Http\Controllers\AdminController@admin")->middleware('admin');
Route::get("/admin/scholarships","App\Http\Controllers\AdminController@scholarships");
Route::get("/admin/scholarships/add","App\Http\Controllers\AdminController@scholarships_add")->name('scholarships_add');
Route::post("/admin/scholarships/store","App\Http\Controllers\AdminController@scholarships_store")->name('scholarships_store');
Route::get("/admin/scholarships/edit/{id}","App\Http\Controllers\AdminController@scholarships_edit")->name('scholarships_edit');
Route::put("/admin/scholarships/update/{id}","App\Http\Controllers\AdminController@scholarships_update")->name('scholarship_update');
Route::get("/admin/scholarships/delete/{id}","App\Http\Controllers\AdminController@scholarships_destroy")->name('scholarships_destroy');


Route::get("/admin/scholarships/exams/{id}","App\Http\Controllers\AdminController@scholarships_exams")->name('scholarship_exams');
Route::get("/admin/scholarships/exams/add/{id}","App\Http\Controllers\AdminController@scholarships_exams_add")->name('scholarships_exams_add');
Route::post("/admin/scholarships/exams/store/{id}","App\Http\Controllers\AdminController@scholarships_exam_store")->name('scholarships_exam_store');
Route::get("/admin/scholarships/exams/edit/{id}","App\Http\Controllers\AdminController@scholarships_exam_edit")->name('scholarships_exam_edit');
Route::put("/admin/scholarships/exams/update/{id}","App\Http\Controllers\AdminController@scholarships_exam_update")->name('scholarships_exam_update');
Route::get("/admin/scholarships/exams/delete/{id}","App\Http\Controllers\AdminController@scholarships_exam_destroy")->name('scholarships_exam_destroy');

Route::post("/scholarship/registration","App\Http\Controllers\AdminController@scholarships_registration_store")->name('scholarships_registration_store')->middleware('auth');

Route::get("/admin/scholarships/result","App\Http\Controllers\AdminController@scholarships_result")->name('scholarships_result');
Route::get("/admin/scholarships/result-view/{id}","App\Http\Controllers\AdminController@scholarships_result_view")->name('scholarships_result_view');
Route::get("/admin/datatable","App\Http\Controllers\AdminController@datatable");

Route::get("/admin/exam_start_time","App\Http\Controllers\AdminController@exam_start_time")->name('exam_start_time');
Route::put("/admin/update_exam_start_time/{id}","App\Http\Controllers\AdminController@update_exam_start_time")->name('update_exam_start_time');

Route::get("/admin/get_scholarship_list","App\Http\Controllers\AdminController@get_scholarship_list")->name('get_scholarship_list');
Route::get("/admin/scholarships/results/{id}","App\Http\Controllers\AdminController@results")->name('results');
Route::get("/admin/scholarships/exam_details/{id}","App\Http\Controllers\AdminController@exam_details")->name('exam_details');

Route::post("/admin/scholarships/scholarship_time/{scho_id}","App\Http\Controllers\AdminController@scholarship_time")->name('scholarship_time');
Route::put("/admin/scholarships/scholarship_time/{id}","App\Http\Controllers\AdminController@scholarship_time_update")->name('scholarship_time_update');

Route::get("/admin/users","App\Http\Controllers\AdminController@users_signin")->name('users_signin');
Route::get("/admin/registration/list","App\Http\Controllers\AdminController@users_registration_list")->name('users_signin');



Route::get("/admin/rank_calculation","App\Http\Controllers\AdminController@rank_calculation")->name('rank_calculation');
Route::get("/admin/rank_calculate/{id}","App\Http\Controllers\AdminController@rank_calculate")->name('rank_calculate');
Route::get("/admin/view_rank_list/{id}","App\Http\Controllers\AdminController@view_rank_list")->name('view_rank_list');
 
Route::get("/tesing","App\Http\Controllers\AdminController@tesing");
Route::get("/delete_data","App\Http\Controllers\AdminController@delete_data");
Route::get("/abcd","App\Http\Controllers\AdminController@abcd");


require __DIR__.'/auth.php';

//Quiz
Route::get("/admin/quiz","App\Http\Controllers\AdminController@quiz");
Route::get("/admin/quiz/add","App\Http\Controllers\AdminController@quiz_add")->name('quiz_add');
Route::post("/admin/quiz/store","App\Http\Controllers\AdminController@quiz_store")->name('quiz_store');
Route::get("/admin/quiz/edit/{id}","App\Http\Controllers\AdminController@quiz_edit")->name('quiz_edit');
Route::put("/admin/quiz/update/{id}","App\Http\Controllers\AdminController@quiz_update")->name('quiz_update');
Route::get("/admin/quiz/delete/{id}","App\Http\Controllers\AdminController@quiz_destroy")->name('quiz_destroy');


Route::get("/admin/quiz/exams/{id}","App\Http\Controllers\AdminController@quiz_exams")->name('quiz_exams');
Route::get("/admin/quiz/exams/add/{id}","App\Http\Controllers\AdminController@quiz_exams_add")->name('quiz_exams_add');
Route::post("/admin/quiz/exams/store/{id}","App\Http\Controllers\AdminController@quiz_exam_store")->name('quiz_exam_store');
Route::get("/admin/quiz/exams/edit/{id}","App\Http\Controllers\AdminController@quiz_exam_edit")->name('quiz_exam_edit');
Route::put("/admin/quiz/exams/update/{id}","App\Http\Controllers\AdminController@quiz_exam_update")->name('quiz_exam_update');
Route::get("/admin/quiz/exams/delete/{id}","App\Http\Controllers\AdminController@quiz_exam_destroy")->name('quiz_exam_destroy');
Route::post("/quiz/registration","App\Http\Controllers\AdminController@quiz_registration_store")->name('quiz_registration_store')->middleware('auth');



//  Mock test

Route::get("/admin/mock","App\Http\Controllers\AdminController@mock");
Route::get("/admin/mock/add","App\Http\Controllers\AdminController@mock_add")->name('mock_add');
Route::post("/admin/mock/store","App\Http\Controllers\AdminController@mock_store")->name('mock_store');
Route::get("/admin/mock/edit/{id}","App\Http\Controllers\AdminController@mock_edit")->name('mock_edit');
Route::put("/admin/mock/update/{id}","App\Http\Controllers\AdminController@mock_update")->name('mock_update');
Route::get("/admin/mock/delete/{id}","App\Http\Controllers\AdminController@mock_destroy")->name('mock_destroy');


Route::get("/admin/mock/exams/{id}","App\Http\Controllers\AdminController@mock_exams")->name('mock_exams');
Route::get("/admin/mock/exams/add/{id}","App\Http\Controllers\AdminController@mock_exams_add")->name('mock_exams_add');
Route::post("/admin/mock/exams/store/{id}","App\Http\Controllers\AdminController@mock_exam_store")->name('mock_exam_store');
Route::get("/admin/mock/exams/edit/{id}","App\Http\Controllers\AdminController@mock_exam_edit")->name('mock_exam_edit');
Route::put("/admin/mock/exams/update/{id}","App\Http\Controllers\AdminController@mock_exam_update")->name('mock_exam_update');
Route::get("/admin/mock/exams/delete/{id}","App\Http\Controllers\AdminController@mock_exam_destroy")->name('mock_exam_destroy');
Route::post("/mock/registration","App\Http\Controllers\AdminController@mock_registration_store")->name('mock_registration_store')->middleware('auth');
