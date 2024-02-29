@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Registration List</h6>
                     
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable3 table table-hover align-middle mb-0" style="width: 100%;text-align:center;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th> 
                                    <th>Email</th> 
                                    <th>Phone</th>
                                    <th>Scholarship </th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($scholarship_reg as $index =>$item)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                   <td>{{$item->name}}</td>
                                   <td>{{$item->email}}</td>
                                   <td>{{$item->number}}</td>
                                   @foreach ($scholarship as $schl )
                                       @if ($item->scholarship  == $schl->id)
                                            <td>{{$schl->heading}}</td>
                                       @endif
                                   @endforeach
                                </tr>
                               @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


@endsection