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
                    <h5>Name of Student: {{$exm_res[0]->name}} </h5> <br>
                        <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    
                                    <th>SI</th> 
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Correct / Wrong</th>
                                </tr>
                            </thead>
                            <tbody> 
                              
                                <?php 
                                foreach($exm_res as  $row ){
                                     
                                 
                                    foreach($row->results as $key => $res ){
                                        $key =$key+1;
                                        echo "<tr><td>".$key."</td>";
                                        echo "<td>".$res->question."</td>";
                                        echo "<td>".$res->answer."</td>";
                                        if($res->result == 1)
                                        echo "<td> correct </td>";
                                        else 
                                        echo "<td> Wrong </td>";

                                        echo "</tr>";
                                    }
                                 
                                    
                                }
                               ?>

<?php /*
                                foreach($exm_res as $row ){
                                    echo "<tr><td>".$row->name."</td>";
                                foreach($row->result as $res ){

                                    echo "<td>".$res->question."</td>";
                                    echo "<td>".$res->answer."</td>";
                                    echo "<td> sas</td>";
                                }
                                echo "</tr>";
                            } */
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection