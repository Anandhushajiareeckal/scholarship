<?php

namespace App\Livewire;
use App\Models\scholarship;
use App\Models\scholarship_exam;
use App\Models\scholarship_reg;
use App\Models\Exam_time;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use App\Models\scholarship_attend;
use App\Models\scholarship_result;
use Termwind\Components\Raw;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ScholarshipExams extends Component
{
    public $scholarship = null;//to find which scholarship
    public $a = 0;//for question array operation
    public $id; //
    public $group; //cheack box input 
    public $finish = false; // to cheack the exam is finish or not
    public $total_qustions;// total question count
    public $correct_answer = 0;// to count total correct answer
    public $attent_status = []; // to check question is answered or not (1,2,3)
    public $cheack= 1;
    public $exam_time;
    public $riv = false;
    public $exam_status = false;
    public $scholarship_res;
    public $sample = false;
    public $finish_exams = false;
    public $sta = true;
    public $next = false;
    public $rel_chek = true;
    // public $hide_next = false;
    //To save the exam after finish exam 
    public function saveexam()
    {
     
        // dd($this->group);
        // Log::info('Showing user profile for user: '.$this->group);
        // $scholarship_reg = scholarship_reg::where('email', Auth::user()->email)->first();
        // $scholarship_reg->scholarship = $this->id;
        // $scholarship_reg->marck = $this->correct_answer . "/" . $this->total_qustions;
        // $scholarship_reg->save();
        $user = Auth::user()->id;
        $scholarship_result = new scholarship_result();
        $scholarship_result->attend_id =$user;
        $scholarship_result->question = $this->scholarship->qustion;
        $scholarship_result->question_id = $this->scholarship->id;
        $scholarship_result->answer = $this->group;
        if($this->group == $this->scholarship->option_1){
            $scholarship_result->result = true;
        }
        else{
            $scholarship_result->result = false;
        }
        // $scholarship_result->exam_status = 2;

        $scholarship_result->save();

        // $this->finish = true;

  

    }
    
    public function finish_exam()
    {
        // Check if the record already exists
        $existingRecord = scholarship_attend::where('user_id', Auth::user()->id)
            ->where('scholarship', $this->id)
            ->first();
    
        if ($existingRecord) {
            // Record already exists, no need to save again
            return redirect('https://kpscpositive.in/');
        }
    
        // Create and save the new record
        $scholarship_attend = new scholarship_attend();
        $scholarship_attend->user_id = Auth::user()->id;
        $scholarship_attend->scholarship = $this->id;
        $scholarship_attend->save();
    
        return redirect('https://kpscpositive.in/');
    }
    

    public function select_question($id)
    {
        $this->a = $id;

        $data = scholarship_exam::where('scho_id', $this->id)->get();
        $this->scholarship = $data[$this->a];
        $this->qustion();
    }

    public function rivew($id)
    {
         for ($i = 0; $i < count($this->attent_status); $i++) {
            $item = $this->attent_status[$i];
            
            // Check if 'id' key exists in the subarray
            if (isset($item['id']) && $item['id'] == $id) {
                $this->attent_status[$this->a]['status'] = 3;
                // $this->finish_exam();
                break;
            }
        }
        $this->qustion(); 
    }

    public function next_btn(){
        $this->next = true;
        $this->qustion();
    }

           
    public function qustion()
    {
        
        // $exam_time  = Exam_time::first();
        // $currentDateTime = now();
        // $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');
        // // dd($exam_time->end_time, $formattedDateTime);
        // if($exam_time->end_time == $formattedDateTime){
        //     $this->finish_exam();
        // }
        $data = scholarship_exam::where('scho_id', $this->id)->get();
        if ($this->group == null && $this->cheack == 1) {   
            for ($i = 0; $i < count($data); $i++) {
                $item = $data[$i];
                $this->attent_status[$i] = [
                    'id' => $item->id,
                    'status' => 1,
                    'qno'=>$i
                ];
            }
            $user = Auth::user()->id;
            $this->scholarship_res = scholarship_result::where('attend_id', $user)->get();
          
            
        }
        
        $scholarship_r = scholarship_result::all();
        foreach ($scholarship_r as $items) {
            if (Auth::user()->id == $items->attend_id) {
                for($i = 0; $i<count($this->attent_status); $i++){
                    if($this->attent_status[$i]['id'] == $items->question_id){
                        $this->attent_status[$i]['status'] = 2;
                    }
                }
            }
            
        }

        if($this->rel_chek == true){
            for($i = 0; $i<count($this->attent_status); $i++){
                if($this->attent_status[$i]['status'] == 1 ){
                    $this->a = $i;
                    $this->rel_chek = false;
                    break;
                }
            }
        }


        // if ($this->group == null && $this->cheack == 1){
        //     $scholarship_attend  = new scholarship_attend();
        //     $scholarship_attend->user_id = Auth::user()->id;
        //     $scholarship_attend->scholarship = $this->id;
        //     // $scholarship_attend->save();
        // }
       
        $this->total_qustions = count($data);
        if($this->sample == false){
            $this->scholarship = $data[$this->a];
        }
        if ($this->a > count($data) &&  $this->sample == false) {
            $this->finish = true;
            return;
        }

        
        

        // if (isset($this->group) && $this->cheack == 2 && $this->next == true) {
        //     $this->attent_status[$this->a] = ['status' => 2];
        // }




        // $val_a = (int) $this->a;
        // if($val_a == count($data)-1 && isset($this->group )){
        //     // dd($val_a);
        //     if($this->attent_status[$this->a]['status'] == 2  && $this->next == true){
        //         $this->hide_next = true;
        
        //     }
        // }
        
        
        

        for ($i = 0; $i < count($this->attent_status); $i++) {
            $item = $this->attent_status[$i];
            
            // Check if 'id' key exists in the subarray
            if ($item['status'] == 1 || $item['status'] == 3) {
                // $this->exam_status = true;
                if($this->a == count($data)){
                    // $this->a = $i;
                }
                // dd($this->exam_status);
                // $this->a = $i;
                
            }
            
        }

        if ($this->a >= count($data) - 1 && $this->group != null) {
            $user = Auth::user()->id;
            $ans =array();
            $result =array();
            $this->scholarship_res = scholarship_result::select('question_id')->where('attend_id', $user)->get();
            foreach( $data as $row ){
                $ids[]= $row->id ;
            }
            foreach($this->scholarship_res as $value){
                $ans[] = $value->question_id;
            }
            if(!empty($ans)){
                $result = array_diff($ids, $ans);

            }
            if(!empty($result)){
                foreach($result as $item){
                    // dd($data[1]);
                    // $this->scholarship = scholarship_exam::where('id', $item)->first();

                    // $this->scholarship = scholarship_exam::all();
                }
                $this->finish = false;
                $this->sample = true;
            }
         
        }
        
        if(isset($this->group ) && $this->next == true){
            $this->saveexam();
        }

        if($this->a > count($data) && $this->exam_status == false && $this->sample == false){
            $this->finish =true;//to cheack the exam is finish or not
            $this->total_qustions = count($data);//Count total number of questions
            $this->correct_answer;
            //cheack the answer is correct or not.
            // if($this->group == $this->scholarship->option_1){
            //     $this->correct_answer++ ;
            // }
        }
        
        else{

            if(isset($this->group ) && $this->a < count($data)-1){
                for($i = 0; $i<count($this->attent_status); $i++){
                    if($this->attent_status[$i]['status'] == 2){
                        $this->a++;
                        break;
        
                    }
                }
                
            }
            elseif(isset($this->group ) && $this->exam_status == false && $this->sample == false){
                // $this->finish =true;

                // $this->error ="Select an option";  

            }
            if($this->a > $this->total_qustions && $this->exam_status == false && isset($this->group ) && $this->sample == false){
                $this->finish = true;
                // dd($this->finish);

            }
            elseif($this->a < count($data) && $this->sample == false){
                $this->scholarship = $data[$this->a];

            }
           
            //cheack the answer is correct or not.
            // if($this->group == $this->scholarship->option_1){
            //     $this->correct_answer++ ;

         
            // }
            
        }
        // foreach($this->scholarship_res as $res){
        //     if($res->question_id == $data[$this->a]->id){
        //         dd('already  att');
        //     }
        // }
       
        $this->group = null;
        $this->cheack = 2;
        $this->next = false;
        // $this->hide_next = false;
    }

    public function shuffleOptions($options)
    {
        //  Log::info('Showing user profile for user: ');

        shuffle($options);
        return $options;
    }

    public function render()
    {
        
       
        // for($i = 0;  $i<count($this->attent_status);$i++){
        //     // dd($this->attent_status);

        //     if($this->attent_status[$i]['status']== 2){
        //         $this->a++; 

        //     }
        // }
       
        $this->exam_time = Exam_time::where('scho_id', $this->id)->first();
        // dd( $this->sample, $this->scholarship);



        Log::info('hdhdhdhdhdhhdhdhdhdhdhdhdhdhdhdhdhdhdhdhdhhdhdhd');

        return view('livewire.scholarship-exams',[
            'scholarship'=>$this->scholarship,
            'abc'=>$this->group,
            'finish'=>$this->finish,
            'attent_status'=>$this->attent_status,
            'a'=>$this->a,
            'total_qustions'=>$this->total_qustions,
            'exam_time' => $this->exam_time,
            'sample' => $this->sample,
            'finish_exams'=>$this->finish_exams,
        ]);
    }
}