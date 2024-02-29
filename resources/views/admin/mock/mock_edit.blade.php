@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add home banner </h5>
                    <form class="form-floating" action="{{ route('mock_update',['id' => $scholarship->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <span class="form-floating">
                                <input value="{{$scholarship->heading}}" type="text"  class="form-control" id="TextInput" placeholder="Name" name="heading" >
                                <label class="" for="TextInput"> Heading</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input value="{{$scholarship->description}}" type="text"  class="form-control" id="TextInput" placeholder="Name" name="description" >
                                <label class="" for="TextInput"> Description</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="file" class="form-control" id="emailInput"  name="image" value="{{$scholarship->icon}} accept="image/*">
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/scholarships" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection