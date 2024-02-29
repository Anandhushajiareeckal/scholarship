@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Scholarship</h6>
                    <div class="form-check form-switch table-toggle-one">
                        <a href="{{ route('mock_add') }}" class="btn btn-primary">Add new banner</a>
                    </div>
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Heading</th>
                                    <th>Icon</th>
                                    <th >Exam</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                               @for($i=0; $i < count($scholarship); $i++)
                                @php
                                    $item = $scholarship[$i];
                                @endphp
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$item->heading}}</td>
                                    <td><img src="{{$item->icon}}" alt="image" style="max-height: 4em; width: auto;"></td>
                                    <td><a href="{{  route('mock_exams',['id' =>$item->id])}}" class="btn btn-info">Open</a></td>

                                    <td>
                                        <a href="{{  route('mock_edit',['id' =>$item->id])}}" class="btn btn-primary">Edit</a>
                                        <a href="{{  route('mock_destroy',['id' =>$item->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
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
@endsection