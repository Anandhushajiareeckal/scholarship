@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Scholarship exam</h6>
                    <div class="form-check form-switch table-toggle-one">
                        @if (isset($scholarships_exams[0]->scho_id))
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLive" style="margin-right:20px;">Exam Time</button>
                        @else
                            <button type="button" disabled class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLive" style="margin-right:20px;">Exam Time</button>
                        @endif
                        <a href="{{ route('scholarships_exams_add',['id'=>$id]) }}" class="btn btn-primary">Add new question</a>
                    </div>
                </div>
               
                <div class="card-body">
                    <!--[ Button trigger modal ]-->

                    <!--[ Modal ]-->
                    <div class="modal fade" id="exampleModalLive" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLiveLabel">Set time for exam</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    @if($time != null)
                                        <form class="form-floating" action="{{route('scholarship_time_update',['id'=>$time->id])}}" method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf

                                            <div class="col-12 pb-5">
                                                <span class="form-floating">
                                                    <input type="datetime-local" class="form-control" id="TextInput"  name="start_time" value="{{ $time->start_time }}" required>
                                                    <label class="" for="TextInput">Start Time</label>
                                                </span>
                                            </div>
                                            <div class="col-12 pb-5">
                                                <span class="form-floating">
                                                    <input type="datetime-local" class="form-control" id="TextInput"  name="end_time" value="{{ $time->end_time }}" required>
                                                    <label class="" for="TextInput"> End Time</label>
                                                </span>
                                            </div> 

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    @else
                                        @if (isset($scholarships_exams))
                                            <form class="form-floating" action="{{route('scholarship_time', ['scho_id'=>$scholarships_exams[0]->scho_id])}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-12 pb-5">
                                                    <span class="form-floating">
                                                        <input type="datetime-local" class="form-control" id="TextInput"  name="start_time" required>
                                                        <label class="" for="TextInput">Start Time</label>
                                                    </span>
                                                </div>
                                                <div class="col-12 pb-5">
                                                    <span class="form-floating">
                                                        <input type="datetime-local" class="form-control" id="TextInput"  name="end_time" required>
                                                        <label class="" for="TextInput"> End Time</label>
                                                    </span>
                                                </div> 

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        @endif
                                    @endif

                                </div>
                             
                            </div>
                        </div>
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
                                        <a href="{{  route('scholarships_exam_edit',['id' =>$item->id])}}" class="btn btn-primary">Edit</a>
                                        <a href="{{  route('scholarships_exam_destroy',['id' =>$item->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
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