@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Scholarship</h6>
                    <div class="form-check form-switch table-toggle-one">
                        {{-- <a href="{{ route('scholarships_add') }}" class="btn btn-primary">Add new banner</a> --}}
                    </div>
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Result</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                               @for($i=0; $i < count($scholarships_reg); $i++)
                                @php
                                    $item = $scholarships_reg[$i];
                                @endphp
                                <tr>
                                    <td>{{$scholarships_reg->firstItem() + $i}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->marck}}</td>

                                    <td>
                                        <a href="{{  route('scholarships_result_view',['id' =>$item->id])}}" class="btn btn-primary">Open</a>
                                    </td>
                                </tr>
                                @endfor 
                            </tbody>
                        </table>
                        <div>
                            {{$scholarships_reg->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection