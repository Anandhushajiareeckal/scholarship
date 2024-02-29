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
                        <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Heading</th> 
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
                                    <td>
                                        <a href="{{  route('results',['id' =>$item->id])}}" class="btn btn-primary">View Result</a>
                                       
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