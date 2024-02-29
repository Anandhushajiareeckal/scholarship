<div class="row justify-content-center" style="padding: 50px;">
    @if($finish_exam == false)
      <div class="col-7 main_exam ">
        <form wire:submit.prevent="marck_calculate">
          @if ($scholarship != null)
    
    
            @php
            $shuffledOptions = $this->shuffleOptions([
            $exam_data->option_1,
            $exam_data->option_2,
            $exam_data->option_3,
            $exam_data->option_4,
            ]);
            @endphp
            <div class="qus_no">
              <h6>Q {{$question_no + 1}}</h6>
            </div>
            <b> {{$exam_data->qustion}}</b>
            {{-- <i style="color: red">{{$error}}</i> --}}
            @if($check_answer == true)
              <div class="qus_form">
                <div class="radio_btn">
                  <input type="radio" wire:model="group" value="{{$shuffledOptions[0]}}"> {{$shuffledOptions[0]}}
                </div>


                {{-- <div style="margin: 12px;border: solid; border-color: #53f053; border-width: 3px">
                    <p style="margin:7px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div> --}}



                <div class="radio_btn" wire:model="cottect_style">
                  <input type="radio" wire:model="group" value="{{$shuffledOptions[1]}}"> {{$shuffledOptions[1]}}
                </div>
                <div class="radio_btn">
                  <input type="radio" wire:model="group" value="{{$shuffledOptions[2]}}"> {{$shuffledOptions[2]}}
                </div>
                <div class="radio_btn">
                  <input type="radio" wire:model="group" value="{{$shuffledOptions[3]}}"> {{$shuffledOptions[3]}}
                </div>
              </div>
              @if($show == true)
                <div class="text-center">
                  <button type="submit"  class="btn btn-primary">Next</button>
                </div>
              @else
                <div class="text-center">
                  <button type="button" wire:click="chack_answer"  class="btn btn-primary">Submit</button>
                </div>
              @endif
            @else
              <div class="radio_btn" style="background: #53f053;">
                <input type="radio" wire:model="group" disabled value=""> {{$exam_data->option_1}}
              </div>


              <div style="margin: 12px;border: solid; border-color: #53f053; border-width: 3px">
                  <p style="margin:7px;">{{$exam_data->solution}}</p>
              </div>

              <div class="text-center">
                <button type="button" wire:click="start" class="btn btn-primary">Next</button>
              </div>
            @endif
          
            <div class="main_exam_footer">
              {{-- <button type="button" id="final_sub" wire:click="finish_exam" class="btn btn-success "
                onclick="return confirm('Are you sure confirm submit')">
                <p> <i class="fas fa-save"></i> Final submit</p>
              </button> --}}
            </div>
          @else
            <div class=" " style="background-color: #ffff; margin-bottom:10px;">
              <h1 class="right_content " style="color: red;">Important Notice</h1>
              <ol style="margin-left: 20px;">
                <li>
                  <p>You can only attend a maximum of one scholarship exam.</p>
                </li><br>
                <li>
                  <p>Do not close or minimize the tab.</p>
                </li><br>
                <li>
                  <p>Any malpractice should result in termination from this exam.</p>
                </li><br>
                <li>
                  <p>Do not refresh the page after starting the exam.</p>
                </li><br>
              </ol>
              <div class="text-center">
                <button id="start_btn" type="button" wire:click="start"  class="btn btn-primary">Start</button>
              </div>
            </div>
          @endif
        </form>
      </div>
      <div class="col-4 main_questin">
        <div class="main_questin_header">
          <h6>QUESTIONS </h6>
          <div class="underline"></div>
        </div>
        <div class="row overflow-auto" style="max-height: 300px;">
          @if (isset($question) && count($question) > 0)
              @foreach ($question as $i => $item)
                  <div class="col-3 col-xs-4 list_ques" 
                    @foreach ($attend as $value)
                      @if ($item == $value)
    
                        style="background: #7393ff;"  
                      @endif
                    @endforeach
                    >
                    <a 
                        @if (in_array($item, $attend))
                        {{-- {{Log::info("hhh   ".in_array($item, $attend))}} --}}
    
                          @disabled(true)
                        @else
                          wire:click="select_question('{{ $item }}')"
                        @endif
                    >
    
                          <p>Q {{ $i + 1 }}</p>
                      </a>
                    
                  </div>
              @endforeach
          @endif
    
    
    
        </div>
    
        <div class="underline"></div>
        <div class="attempt_no">
          <b>Total Questions : </b>
        </div>
        <div class=" warning">
          <div class=" war_1 "></div>
          <p> Not Answered</p><br>
          <div class="war_2"></div>
          <p> Answered</p><br>
          <!--<div class="war_3"></div><p> Mark for Review</p>-->
        </div>
      </div>
    
    
        @else
    
        <div class="col-4" style="background:#ffffff; height:300px;">
          <h2 class="text-center pt-4">Exam finished</h2>
          <h4 class="text-center pt-4"> Result :</h4>
          <h6 class="text-center pt-4"> {{$marck}} of {{$total_questions}}</h6>
          <h6 class="text-center pt-4"> 
            @if ($marck_percentage <= 25)
              <b style="color:red;">{{$marck_percentage}}%</b>
            @elseif($marck_percentage > 25 && $marck_percentage <= 75)
                <b style="color: #00b2ff;">{{$marck_percentage}}%</b>
              @else
            <b style="color: #51e595;">{{$marck_percentage}}%</b>
            @endif
          </h6>
          <div class="text-center pt-4">
            <button class="btn btn-primary" style="width: 80px;height:40px"><a href="/mock_questions/{{$id}}" style="color: white">Try again</a></button>
            <button class="btn btn-info" style="width: 80px;height:40px"><a href="{{$links->base_url}}" style="color: white">Home</a></button>
    
          </div>
        </div>
    
      <div class="col-4 main_questin">
        <div class="main_questin_header">
          <h6>QUESTIONS </h6>
          <div class="underline"></div>
        </div>
        <div class="row overflow-auto" style="max-height: 300px;">
    
          @if (isset($question) && count($question) > 0)
              @foreach ($question as $i => $item)
                  <div class="col-3 col-xs-4 list_ques" 
                    @foreach ($attend as $value)
                      @if ($item == $value)
    
                        style="background: #7393ff;"  
                      @endif
                    @endforeach
                    >
                    <a 
                        @if (in_array($item, $attend))
    
                          @disabled(true)
                        @else
                          wire:click="select_question('{{ $item }}')"
                        @endif
                    >
    
                          <p>Q {{ $i + 1 }}</p>
                      </a>
                    
                  </div>
              @endforeach
          @endif
    
    
           
        </div>
        <div class="underline"></div>
        <div class="attempt_no">
          <b>Total Questions : </b>
        </div>
        <div class=" warning">
          <div class=" war_1 "></div>
          <p> Not Answered</p><br>
          <div class="war_2"></div>
          <p> Answered</p><br>
          <!--<div class="war_3"></div><p> Mark for Review</p>-->
        </div>
      </div>
    
    
     
      @endif
    </div>
    
    
    
    