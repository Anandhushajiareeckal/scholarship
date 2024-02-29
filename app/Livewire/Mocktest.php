<?php

namespace App\Livewire;
use App\Models\mock;
use App\Models\linkk;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Mocktest extends Component
{
    public $scholarship = null;//to find which scholarship
    public $id;// scholarship  id
    public $marck = 0; // count total marck
    public $group; // input from user
    public $question = []; // to store total  question ( store only id)
    public $attend = []; //to store attend questions ( store only id)
    public $question_id; // to store corrent question id
    public $exam_data; // to pass question to frontend
    public $finish_exam = false; // to cheack the exam is finish or not
    public $diff ;
    public $total_questions; // to  store total questions
    public $marck_percentage;
    public $show = false; 
    public $check_answer = true; 
    public $question_no; // store question number
    public $links;
    
    public function start(){
        $this->check_answer = true; 
        $this->scholarship = mock::where('scho_id', $this->id)->get();
        $this->total_questions = count($this->scholarship) ;
        if($this->question == null){
            foreach($this->scholarship as $item){
                $this->question[] = $item->id;
            }
        }
        $this->diff = array_diff($this->question, $this->attend);
        $this->question_id = reset($this->diff); 
        $this->qustion(); 
 
     }

    public function qustion(){
        foreach($this->scholarship as $index =>$data){
            if($data->id == $this->question_id){
                $this->exam_data = $data;
                $this->question_no = $index;
                break;
            }
        }

    }

    public function select_question($id){
        $this->group = null;
        $this->question_id = $id;
        $this->qustion(); 
    }




    public function shuffleOptions($options)
    {
        shuffle($options);
        return $options;
    }
    

    public function marck_calculate(){
        Log::info($this->group.'group');
        $this->show = false;
        if(isset($this->group)){
            
            if(count($this->question)-1 == count($this->attend)){
                $this->finish_exam = true;
            }
            if($this->exam_data->option_1 == $this->group){
                $this->marck++;

            }
            $this->attend[] = $this->exam_data->id;
            $this->group = null;
            $this->marck_percentage = $this->marck / $this->total_questions * 100;
            $this->start();
        }

    }

    public function wrong(){
        Log::info("wrong");
        $this->check_answer = false;
        $this->attend[] = $this->exam_data->id;
        $this->group = null;
    }


    public function chack_answer(){
        if(isset($this->group)){
            if($this->exam_data->option_1 == $this->group){
                $this->marck_calculate();
            }
            else{
                $this->wrong();
            }
            $this->show = true;
        }
     
    }

    public function render()
    {
        $this->links = linkk::first();
        return view('livewire.mocktest',);
    }
}
