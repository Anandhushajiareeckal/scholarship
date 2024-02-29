@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Home</h6>
                    <div class="form-check form-switch table-toggle-one">
                        {{-- <a href="{{ route('event_view')}}" class="btn btn-primary">Add</a> --}}
                    </div>
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <h6>Name :  {{$scholarships_reg->name}}</h6><br>
                        <h6>Email :  {{$scholarships_reg->email}}</h6><br>
                        <h6>Number : {{$scholarships_reg->number}}</h6><br>
                        <h6>Parent Number : {{$scholarships_reg->parent_numb}}</h6><br>
                        <h6>Gender :  {{$scholarships_reg->sex}}</h6><br>
                        <h6>Scholarship : {{$scholarships}}</h6><br>
                        <h6>Mark : {{$scholarships_reg->marck}}</h6><br>
                        <h6>Adress :</h6><h6>{{$scholarships_reg->adress}}</h6><br>
                    </div>
                </div>
                <a href="/admin/scholarships/result" class="btn btn-primary">Close</a>
            </div>
        </div>
    </div>
    
</div>
@endsection