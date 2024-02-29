@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Scholarship exam</h6>
                    <div class="form-check form-switch table-toggle-one">
                        <a href="{{ route('quiz_exams_add',['id'=>$id]) }}" class="btn btn-primary">Add new question</a>
                    </div>
                </div>
               
               
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th >Options</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                               @for($i=0; $i < count($scholarships_exams); $i++)
                                @php
                                    $item = $scholarships_exams[$i];
                                @endphp
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$item->qustion}}</td>
                                    <td>{{$item->option_1}}</td>
                                    <td>1. {{$item->option_2}} <br>
                                        2. {{$item->option_3}} <br>
                                        3. {{$item->option_4}} 
                                    </td>


                                    <td>
                                        <a href="{{  route('quiz_exam_edit',['id' =>$item->id])}}" class="btn btn-primary">Edit</a>
                                        <a href="{{  route('quiz_exam_destroy',['id' =>$item->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                    </td>
                                </tr>
                                @endfor 
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