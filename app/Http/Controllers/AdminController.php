<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\scholarship;
use App\Models\scholarship_exam;
use App\Models\Rank_list;
use App\Models\Exam_time;
use App\Models\scholarship_attend;
use App\Models\scholarship_reg;
use App\Models\quiz_cat;
use App\Models\quizs;
use App\Models\mock;
use App\Models\mock_cat;
use App\Models\scholarship_result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
       //admin
    public function admin() {
        return view ('layouts.admin');
    }

    //scholarships
    public function scholarships() {
        $scholarship = scholarship::all();
        return view('admin.scholarship',['scholarship'=>$scholarship]);
    }

    public function scholarships_add() {
        return view('admin.scholarships_add');
    }

    public function scholarships_store(Request $request) {
        $scholarship = new scholarship();
        $scholarship->heading = request("heading");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $scholarship -> icon = '/images/'.$imageName;
        }
        $scholarship->description = request("description");
        $scholarship->save();
        return redirect('/admin/scholarships');
    }

    public function scholarships_edit(string $id){
        $scholarship =  scholarship::find($id);
        return view('admin.scholarships_edit', ['scholarship' => $scholarship]);

    }

    //scholarships_update
    public function scholarships_update(Request $request, string $id) {
        $scholarship= scholarship::find($id);
        $scholarship->heading = request("heading");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $scholarship -> icon = '/images/'.$imageName;
        }
        $scholarship->description = request("description");
        $scholarship->save();
        return redirect('/admin/scholarships');
    }

    public function scholarships_destroy(string $id) {
        $scholarship = scholarship :: find($id);
        $scholarships_exams =  scholarship_exam::where('scho_id',  $id)->get();
        if ($scholarship) {
            $imagePath = public_path($scholarship->icon);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
         foreach($scholarships_exams as $item){
            $item->delete();
        }
        $scholarship->delete();
        return redirect('admin/scholarships');
    }

    public function scholarships_exams(string $id) {
        $time = null;
        $exam_times = Exam_time::all();
        
        foreach ($exam_times as $item) {
            if ($item->scho_id == $id) {
                $time = $item;
                break; 
            }
        }
        $scholarships_exams = scholarship_exam::where('scho_id',  $id)->get();
            return view('admin.scholarship_exams',[
            'scholarships_exams'=>$scholarships_exams,
            'id'=>$id,
            'time'=>$time
        ]);
    }

    public function scholarships_exams_add(string $id) {
        return view('admin.scholarship_exam_add',['id'=>$id]);
    }

    public function scholarships_exam_store(Request $request, string $id) {
        $scholarships_exams = new scholarship_exam();
        $scholarships_exams->scho_id = $id;
        $scholarships_exams->qustion = request("qustion");
        $scholarships_exams->option_1 = request("option_1");
        $scholarships_exams->option_2 = request("option_2");
        $scholarships_exams->option_3 = request("option_3");
        $scholarships_exams->option_4 = request("option_4");
        $scholarships_exams->save();
        return redirect('/admin/scholarships/exams/'.$id);
    }

    public function scholarships_exam_edit(string $id) {
        $scholarships_exams = scholarship_exam::find($id);
        return view('admin.scholarship_exam_edit', ['scholarships_exams' => $scholarships_exams]);
    }

    public function scholarships_exam_update(Request $request, string $id) {
        $scholarships_exams =  scholarship_exam::find($id);
        $scholarships_exams->qustion = request("qustion");
        $scholarships_exams->option_1 = request("option_1");
        $scholarships_exams->option_2 = request("option_2");
        $scholarships_exams->option_3 = request("option_3");
        $scholarships_exams->option_4 = request("option_4");
        $scholarships_exams->save();
        return redirect('/admin/scholarships/exams/'.$scholarships_exams->scho_id);
    }

    public function scholarships_exam_destroy(string $id){
        $scholarships_exams =  scholarship_exam::find($id);
        $scholarships_exams->delete();
        return redirect('/admin/scholarships/exams/'.$scholarships_exams->scho_id);
    }

    public function scholarships_registration_store(Request $request){
       
       
        $scholarships_reg = new scholarship_reg;
        $scholarships_reg->name = request("name");
        $scholarships_reg->user_id = Auth::user()->id;
        $scholarships_reg->email = Auth::user()->email;
        $scholarships_reg->number = request("number");
        $scholarships_reg->parent_numb = request("parent_numb");
        $scholarships_reg->sex = request("sex");
        $scholarships_reg->scholarship = request("scholarship");
        $scholarships_reg->age = request("age");
        $scholarships_reg->adress = request("adress");
        $scholarships_reg->save();
        return redirect('https://kpscpositive.in/');

    }
    public function scholarships_result(){
        $scholarships_reg = scholarship_reg::whereNotNull('marck')->paginate(10);
        return view('admin.scholarship_result',['scholarships_reg'=>$scholarships_reg]);
    }

    public function scholarships_result_view(string $id){
        $scholarships_reg = scholarship_reg::find($id);
        $scholarships = scholarship::find($scholarships_reg->scholarship);
        return view('admin.result_view',['scholarships_reg'=>$scholarships_reg,'scholarships'=>$scholarships->heading]);
    }

    public function exam_start_time() {       
        $exam_time = Exam_time::first(); 
        return view('admin.exam_time',['exam_time'=>$exam_time ]);
    }

    public function update_exam_start_time(Request $request) {  
        $exam_time              = Exam_time::find($request->id);
        $exam_time->start_time  = $request->start_time;
        $exam_time->end_time    = $request->end_time;
        $exam_time->save();
        return redirect('/admin/exam_start_time');
    }
 


    public function datatable(){
        return view('admin.data_table');
    }

    public function get_scholarship_list(Request $request) {  

        $scholarships = scholarship::all(); 
        return view('admin.exam_result',['scholarship'=>$scholarships ]);
    }

    public function results(Request $request) {  
         
        $exm_res = scholarship_attend::with('user','user.results')->where('scholarship', $request->id)->get();
 
        return view('admin.result',['exm_res'=>$exm_res ]);   
    }

    public function exam_details(Request $request) {  
        $exm_res = User::with('results')->where('id', $request->id)->get(); 
 
        return view('admin.exm_res_detail',['exm_res'=>$exm_res ]);   
    }

    public function scholarship_time(Request $request, string $scho_id){
        // dd(request('start_time'),request('end_time') );
        $exam_time = new Exam_time();
        $exam_time->scho_id = $scho_id;
        $exam_time->start_time = request('start_time');
        $exam_time->end_time = request('end_time');
        $exam_time->save();
        return back();

    }

    public function rank_calculation(Request $request) {  

        $scholarships = scholarship::all(); 
        return view('admin.rank_calculation',['scholarship'=>$scholarships ]);
    }

    public function rank_calculate(Request $request) {   
        
        Rank_list::where('scholarship_id', $request->id)->delete();
        $exm_res = scholarship_attend::with('user','user.results')->where('scholarship', $request->id)->get();
    
        
        foreach($exm_res as $key =>  $res) { 
            $name           = $res->user->name;
            $wrong_answer   = 0;
            $correct_answer = 0;
            $divisor        = 3;
            $actual_marks   = 0;
            $total_marks    = 0;
            $negative_mark  = 0;
            $allRows = [];
          foreach($res->user->results as $row ) { 
            //  echo "<p>".$row."</p><br>"; 
             // Convert the object to an array and add it directly to $allRows
    $allRows[] = json_decode(json_encode($row), true);
            // echo "<p>".$row."</p><br>";
            // Dump the contents of $d for debugging
            // Assuming $row is an array of objects

    
        //      echo "<pre>";
        // print_r($allRows);
        // echo "</pre>";
        // $allRows[] = json_decode(json_encode($row), true);
            




            if($row->result == 0)
                $wrong_answer = $wrong_answer +1;
            else 
                $correct_answer = $correct_answer +1;
            }
        // Initialize an array to store rows with matching question_id
        $matchingRows = [];

//         // Loop through each row
        for ($i = 0; $i < count($allRows); $i++) {
            // Loop through other rows to find matches
            for ($j = $i + 1; $j <  count($allRows); $j++) {
                // Check if the question_id matches
                if ($allRows[$i]['question_id'] == $allRows[$j]['question_id']) {
                    // Add the matching rows to the $matchingRows array
                    $matchingRows[] = $allRows[$i];
                    $matchingRows[] = $allRows[$j];
                }
            }
        }
        // foreach($matchingRows as $data){
        //     echo "<p>"
        //     .$data.
        //     "</p><br>";
        // }

//         // Print the matching rows
        // echo $matchingRows;
            echo "<pre>";

          // Assuming $matchingRows is your array

                // Create an associative array to store the maximum id for each question_id
                $maxIds = array();
                
                foreach ($matchingRows as $data) {
                    $questionId = $data['question_id'];
                    $currentId = $data['id'];

                    // Check if the question_id is already in $maxIds array
                    if (array_key_exists($questionId, $maxIds)) {
                        // If current id is greater than the stored maximum id, update it
                        if ($currentId > $maxIds[$questionId]) {
                            $maxIds[$questionId] = $currentId;
                        }
                    } else {
                        // If question_id is not in $maxIds array, add it with current id
                        $maxIds[$questionId] = $currentId;
                    }
                }
                // Iterate through $maxIds array to display the results
                foreach ($maxIds as $questionId => $maxId) {
                    echo "question_id: " . $questionId . " max_id: " . $maxId . "<br>";
                    // $scholarship_result = scholarship_result::find($maxId);
                    // $scholarship_result->delete();
                }


            echo "</pre>";


            echo "<pre>";

            foreach ($matchingRows as $index =>$data) {
                 echo "<b style='color:red;'>" .$index."</b>"."  question_id: " . $data['question_id'] . "  "."id:".$data['id']."<br>";
            }

            echo "</pre>";

            $total_marks = $correct_answer;
            $negative_mark =  intdiv($wrong_answer, $divisor); 

            $actual_marks =  $total_marks - $negative_mark;          
          
            // echo $name.  "--name <br>"           ;
            // echo $wrong_answer.  "--wrong_answer <br>"   ;
            // echo $correct_answer.  "--correct_answer <br>" ;
            // echo $divisor.  "--divisor <br>"        ;
            // echo $actual_marks.  "--actual_marks <br>"   ;
            // echo $total_marks.  "--total_marks <br>"    ;
            // echo $negative_mark.  "--negative_mark <br>"  ;

            $rank_list                  = new Rank_list();
            $rank_list->name            =  $name;
            $rank_list->scholarship_id  =  $request->id;
            $rank_list->correct_ans     =  $correct_answer;
            $rank_list->wrong_ans       =  $wrong_answer;
            $rank_list->total_mark      =  $total_marks;
            $rank_list->negative_mark   =  $negative_mark;
            $rank_list->actual_marks    =  $actual_marks;
            $rank_list->save();
           
        }
        // echo "<pre>";
        // print_r($allRows);
        // echo "</pre>";

        return redirect()->route('rank_calculation');
 
        // return view('admin.rank_list',['exm_res'=>$exm_res ]);   
    }
    
    public function scholarship_time_update(Request $request, string $id){
        // dd(request('start_time'),request('end_time') );
        $exam_time = Exam_time::find($id);
        $exam_time->start_time = request('start_time');
        $exam_time->end_time = request('end_time');
        $exam_time->save();
        return back();
    }
    
    public function users_signin(){
        $users = User::all();
        return view('admin.users',['users'=>$users,]);
    }

    public function users_registration_list(){
        $scholarship = scholarship::all();
        $scholarship_reg = scholarship_reg::all();
        return view('admin.registration_list',[
            'scholarship_reg'=>$scholarship_reg,
            'scholarship'=>$scholarship,
        ]);
    }

    public function view_rank_list(Request $request) {

        $exm_res = Rank_list::where('scholarship_id', $request->id)->orderByRaw('CONVERT(actual_marks, SIGNED) desc')->get(); 
        $scholarship_details = scholarship::where('id', $request->id)->first();
        // foreach($exm_res as $row) {
        //     echo $row->name. "--".$row->actual_marks."<br>";
        // } 
        return view('admin.rank_list',['exm_res'=>$exm_res,'scholarship_details' =>$scholarship_details ]);   

    }

    public function tesing(){
     
    }
    public function abcd(){
        return view('admin.delete_duplicate');
    }

    public function delete_data(Request $request){
        $id = request('id');
        $scholarship_result = scholarship_result::find($id);
        $scholarship_result->delete();
        return  redirect('/admin/rank_calculate/17');

    }



// Quiz
    public function quiz() {
        $scholarship = quiz_cat::all();
        return view('admin.quiz.quiz',['scholarship'=>$scholarship]);
    }

    public function quiz_add() {
        return view('admin.quiz.quiz_add');
    }

    public function quiz_store(Request $request) {
        $scholarship = new quiz_cat();
        $scholarship->heading = request("heading");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $scholarship -> icon = '/images/'.$imageName;
        }
        $scholarship->description = request("description");
        $scholarship->save();
        return redirect('/admin/quiz');
    }

    public function quiz_edit(string $id){
        $scholarship =  quiz_cat::find($id);
        return view('admin.quiz.quiz_edit', ['scholarship' => $scholarship]);

    }

    //scholarships_update
    public function quiz_update(Request $request, string $id) {
        $scholarship= quiz_cat::find($id);
        $scholarship->heading = request("heading");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $scholarship -> icon = '/images/'.$imageName;
        }
        $scholarship->description = request("description");
        $scholarship->save();
        return redirect('/admin/quiz');
    }

    public function quiz_destroy(string $id) {
        $scholarship = quiz_cat :: find($id);
        $scholarships_exams =  quizs::where('scho_id',  $id)->get();
        if ($scholarship) {
            $imagePath = public_path($scholarship->icon);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
         foreach($scholarships_exams as $item){
            $item->delete();
        }
        $scholarship->delete();
        return redirect('admin/quiz');
    }

    public function quiz_exams(string $id) {
        $time = null;
        $exam_times = Exam_time::all();
        
        foreach ($exam_times as $item) {
            if ($item->scho_id == $id) {
                $time = $item;
                break; 
            }
        }
        $scholarships_exams = quizs::where('scho_id',  $id)->get();
            return view('admin.quiz.quiz_exams',[
            'scholarships_exams'=>$scholarships_exams,
            'id'=>$id,
            'time'=>$time
        ]);
    }

    public function quiz_exams_add(string $id) {
        return view('admin.quiz.quiz_exam_add',['id'=>$id]);
    }

    public function quiz_exam_store(Request $request, string $id) {
        $scholarships_exams = new quizs();
        $scholarships_exams->scho_id = $id;
        $scholarships_exams->qustion = request("qustion");
        $scholarships_exams->option_1 = request("option_1");
        $scholarships_exams->option_2 = request("option_2");
        $scholarships_exams->option_3 = request("option_3");    
        $scholarships_exams->option_4 = request("option_4");
        $scholarships_exams->save();
        return redirect('/admin/quiz/exams/'.$id);
    }

    public function quiz_exam_edit(string $id) {
        $scholarships_exams = quizs::find($id);
        return view('admin.quiz.quiz_exam_edit', ['scholarships_exams' => $scholarships_exams]);
    }

    public function quiz_exam_update(Request $request, string $id) {
        $scholarships_exams =  quizs::find($id);
        $scholarships_exams->qustion = request("qustion");
        $scholarships_exams->option_1 = request("option_1");
        $scholarships_exams->option_2 = request("option_2");
        $scholarships_exams->option_3 = request("option_3");
        $scholarships_exams->option_4 = request("option_4");
        $scholarships_exams->save();
        return redirect('/admin/quiz/exams/'.$scholarships_exams->scho_id);
    }

    public function quiz_exam_destroy(string $id){
        $scholarships_exams =  quizs::find($id);
        $scholarships_exams->delete();
        return redirect('/admin/quiz/exams/'.$scholarships_exams->scho_id);
    }








    //mock  test

    public function mock() {
        $scholarship = mock_cat::all();
        return view('admin.mock.mock',['scholarship'=>$scholarship]);
    }

    public function mock_add() {
        return view('admin.mock.mock_add');
    }

    public function mock_store(Request $request) {
        $scholarship = new mock_cat();
        $scholarship->heading = request("heading");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $scholarship -> icon = '/images/'.$imageName;
        }
        $scholarship->description = request("description");
        $scholarship->save();
        return redirect('/admin/mock');
    }

    public function mock_edit(string $id){
        $scholarship =  quiz_cat::find($id);
        return view('admin.mock.mock_edit', ['scholarship' => $scholarship]);

    }

    //scholarships_update
    public function mock_update(Request $request, string $id) {
        $scholarship= mock_cat::find($id);
        $scholarship->heading = request("heading");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $scholarship -> icon = '/images/'.$imageName;
        }
        $scholarship->description = request("description");
        $scholarship->save();
        return redirect('/admin/mock');
    }

    public function mock_destroy(string $id) {
        $scholarship = mock_cat :: find($id);
        $scholarships_exams =  quizs::where('scho_id',  $id)->get();
        if ($scholarship) {
            $imagePath = public_path($scholarship->icon);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
         foreach($scholarships_exams as $item){
            $item->delete();
        }
        $scholarship->delete();
        return redirect('admin/mock');
    }

    public function mock_exams(string $id) {
        $time = null;
        $exam_times = Exam_time::all();
        
        foreach ($exam_times as $item) {
            if ($item->scho_id == $id) {
                $time = $item;
                break; 
            }
        }
        $scholarships_exams = mock::where('scho_id',  $id)->get();
            return view('admin.mock.mock_exams',[
            'scholarships_exams'=>$scholarships_exams,
            'id'=>$id,
            'time'=>$time
        ]);
    }

    public function mock_exams_add(string $id) {
        return view('admin.mock.mock_exam_add',['id'=>$id]);
    }

    public function mock_exam_store(Request $request, string $id) {
        $scholarships_exams = new mock();
        $scholarships_exams->scho_id = $id;
        $scholarships_exams->qustion = request("qustion");
        $scholarships_exams->solution = request("solution");
        $scholarships_exams->option_1 = request("option_1");
        $scholarships_exams->option_2 = request("option_2");
        $scholarships_exams->option_3 = request("option_3");
        $scholarships_exams->option_4 = request("option_4");
        $scholarships_exams->save();
        return redirect('/admin/mock/exams/'.$id);
    }

    public function mock_exam_edit(string $id) {
        $scholarships_exams = mock::find($id);
        return view('admin.mock.mock_exam_edit', ['scholarships_exams' => $scholarships_exams]);
    }

    public function mock_exam_update(Request $request, string $id) {
        $scholarships_exams =  mock::find($id);
        $scholarships_exams->qustion = request("qustion");
        $scholarships_exams->solution = request("solution");
        $scholarships_exams->option_1 = request("option_1");
        $scholarships_exams->option_2 = request("option_2");
        $scholarships_exams->option_3 = request("option_3");
        $scholarships_exams->option_4 = request("option_4");
        $scholarships_exams->save();
        return redirect('/admin/mock/exams/'.$scholarships_exams->scho_id);
    }

    public function mock_exam_destroy(string $id){
        $scholarships_exams =  mock::find($id);
        $scholarships_exams->delete();
        return redirect('/admin/mock/exams/'.$scholarships_exams->scho_id);
    }
  
}
