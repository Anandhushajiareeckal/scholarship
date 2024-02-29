@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Scholarship Results</h6>
                     
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable2 table table-hover align-middle mb-0" style="width: 100%;text-align:center;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th  style='text-align:left;'>Name</th> 
                                    <th>Wrong Ans</th>
                                    <th>Correct Ans</th>
                                    <th>Total Questions Attend</th>
                                    <th>Total Marks</th>
                                    <th>Negative Marks</th>
                                    <th>Actual Marks</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($exm_res as $key =>  $res){ 
                                    $key = $key+1;
                                    echo  "<tr><td>".$key."</td>";
                                    echo  "<td style='text-align:left;'>".Str::title($res->name)."</td>";
                                    echo  "<td>".$res->wrong_ans."</td>";
                                    echo  "<td>".$res->correct_ans."</td>";
                                    echo   "<td>".$res->wrong_ans+$res->correct_ans ."</td>";
                                    echo   "<td>".$res->total_mark ."</td>";
                                    echo   "<td>".$res->negative_mark ."</td>";
                                    echo   "<td>".$res->actual_marks ."</td></tr> "; 

                                }
                                ?>                               
                            <?php  
                            /*



        foreach($exm_res as $key =>  $res){ 
           
            $name           = $res->name;
            $wrong_answer   = 0;
            $correct_answer = 0;
            $divisor        = 3;
            $actual_marks   = 0;
            $total_marks    = 0;
            $negative_mark  = 0;
            $key = $key +1;
            echo  "<tr><td>".$key ."</td>";
            echo  "<td>".$res->user->name."</td>";
            foreach($res->user->results as $row ) {
                if($row->result == 0)
                    $wrong_answer = $wrong_answer +1;
                else 
                    $correct_answer = $correct_answer +1;
                }

                    $total_marks = $correct_answer;
                    $negative_mark =  intdiv($wrong_answer, $divisor); 

                    $actual_marks =  $total_marks - $negative_mark;                 
                
                    echo  "<td>".$wrong_answer."</td>";
                    echo  "<td>".$correct_answer."</td>";
                    echo   "<td>".$wrong_answer+$correct_answer ."</td>";
                    echo   "<td>".$total_marks ."</td>";
                    echo   "<td>".$negative_mark ."</td>";
                    echo   "<td>".$actual_marks ."</td></tr> "; 
          
             }

*/

                                
                             ?>  
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script> 





</script>
@endsection