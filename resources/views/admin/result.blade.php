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
                        <table class="myDataTable1 table table-hover align-middle mb-0" style="width: 100%;text-align:center;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th> 
                                    <th>Wrong Ans</th>
                                    <th>Correct Ans</th>
                                    <th>Total Questions Attend</th>
                                    <th>View Answers</th>   

                                </tr>
                            </thead>
                            <tbody>
                               
                            <?php  
                                foreach($exm_res as $key =>  $res){ 
                                    $key = $key +1;
                                    echo  "<tr><td>".$key ."</td>";
                                    echo  "<td>".$res->user->name."</td>";
                                    $wrong_answer   = 0;
                                    $correct_answer = 0;
                                  foreach($res->user->results as $row ) {
                                    if($row->result == 0)
                                        $wrong_answer = $wrong_answer +1;
                                    else 
                                        $correct_answer = $correct_answer +1;
                                  }
                                  echo  "<td>".$wrong_answer."</td>";
                                  echo  "<td>".$correct_answer."</td>";
                                  echo   "<td>".$wrong_answer+$correct_answer ."</td>";

                                  ?>
                                   
                                   <td> <a href="{{  route('exam_details',['id' =>$res->user->id])}}" class="btn btn-primary">View Result</a></td></tr> 

                                  <?php
                                 
                                  
                                }
                                  
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