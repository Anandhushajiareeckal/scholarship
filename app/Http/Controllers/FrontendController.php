<?php

namespace App\Http\Controllers;
use App\Models\scholarship;
use App\Models\scholarship_exam;
use App\Models\scholarship_reg;
use App\Models\scholarship_attend;
use App\Models\scholarship_result;
use Illuminate\Http\Request;
use App\Models\Exam_time;
use App\Models\quizs;
use App\Models\quiz_cat;
use App\Models\mock_cat;
use App\Models\linkk;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Crypt;
class FrontendController extends Controller
{
    public function __construct() {  
     
    }
    
    public function index(){
        return view('frontend.index');
    }

    //scholarship page
    public function scholarships() {
        $scholarship = scholarship::all();
        // $scholarship_attend = scholarship_attend::all();
        // $user = Auth::user()->id;
        // foreach ($scholarship_attend as $data) {
        //     if($data->user_id == $user){
        //         return redirect('http://127.0.0.1:8000/');
        //     }
        // }
        return view('frontend.scholarship',['scholarship'=>$scholarship]);

    }    

    public function scholarship_questions(string $id, string $user) {
        $link = linkk::first();
        $exam_time = Exam_time::where('scho_id', $id)->first();
        $users = User::all();
        $userId = Crypt::decryptString(urldecode($user));
        $scholarship_attend = scholarship_attend::all();
        foreach ($scholarship_attend as $data) {
            if($data->user_id == $userId){
                return redirect($link->base_url);
            }
        }
        foreach($users as $data){
            if($data->id == $userId){
                return view('frontend.scholarship_questions',['id'=>$id, 'exam_time' => $exam_time, 'user'=>$userId, 'link'=>$link ]);
            }
        }

        return redirect($link->base_url);

    }

    public function scholarships_question_store(Request $request) {
        $selectedValue = $request->input('group');
        echo $selectedValue;
    }

    public function sample(){
        return view('frontend.sample');
    }

    public function scholarships_registration(){
        $reg                = false;
        $scholarships_user  = scholarship_reg::all();
        $scholarship = scholarship::all();
        foreach($scholarships_user as $item){
            if ($item->email == Auth::user()->email){
                $reg = true;
                return view('frontend.scholarship_register',['reg'=>$reg, 'scholarship'=>$scholarship]);
            }
        }
        return view('frontend.scholarship_register',['reg'=>$reg, 'scholarship'=>$scholarship]);   
    }

    public function example(){
        return view('frontend.exam');
    }

    public function data_testing(){
        $users = scholarship_result::all();
        foreach($users as $item){
            if($item->attend_id == 54   ){
                echo "<p>".$item."</p><br>";
            }
           
        }
    }

    public function quiz(string $id){
        $link = linkk::first();
        $exam_time = Exam_time::where('scho_id', $id)->first();
        $scholarship_attend = scholarship_attend::all();
        $user = Auth::user()->id;
        foreach ($scholarship_attend as $data) {
            if($data->user_id == $user){
                return redirect('/');
            }
        }
        return  view('frontend.quiz',['id'=>$id, 'exam_time' => $exam_time , 'link'=>$link]);
    }

    //Quiz 


    public function quiz_cat() {
        $scholarship = quiz_cat::all();
        return view('frontend.quiz_cat',['scholarship'=>$scholarship]);

    } 

    public function quiz_questions(string $id) {
        $link = linkk::first();
        $exam_time = Exam_time::where('scho_id', $id)->first();
        return view('frontend.quiz',['id'=>$id, 'exam_time' => $exam_time, 'link'=>$link ]);
    }

    //mock test

    public function mock_cat() {
        $scholarship = mock_cat::all();
        return view('frontend.mock_cat',['scholarship'=>$scholarship]);

    } 

    public function mock_questions(string $id) {
        $link = linkk::first();
        $exam_time = Exam_time::where('scho_id', $id)->first();
        return view('frontend.mocktest',['id'=>$id, 'exam_time' => $exam_time, 'link'=>$link ]);
    }
    
}
