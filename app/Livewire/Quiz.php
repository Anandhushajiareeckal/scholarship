<?php

namespace App\Livewire;
use App\Models\quizs;
use Illuminate\Support\Facades\Log;

use Livewire\Component;

class Quiz extends Component
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


    
    public function start(){

        $this->scholarship = quizs::where('scho_id', $this->id)->get();
        $this->total_questions = count($this->scholarship) ;
        if($this->question == null){
            foreach($this->scholarship as $item){
                $this->question[] = $item->id;
            }
        }
        $this->diff = array_diff($this->question, $this->attend);
        $this->question_id = reset($this->diff); 
        $this->qustion(); 
        Log::info('start  is called');
 
     }

    public function qustion(){

        foreach($this->scholarship as $data){
            if($data->id == $this->question_id){
                $this->exam_data = $data;
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
        //  Log::info('Showing user profile for user: ');   

        shuffle($options);
        return $options;
    }
    

    public function marck_calculate(){

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

    public function render()
    {
        Log::info($this->question);
        Log::info($this->attend);
        return view('livewire.quiz');
    }
}
