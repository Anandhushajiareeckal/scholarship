@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Update Exam time </h5>
                    <form class="form-floating" action="{{ route('update_exam_start_time',['id'=>$exam_time->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-6 mb-4">
                            <span class="form-floating">
                                <input type="datetime-local" class="form-control" id="TextInput"  name="start_time"  value="{{$exam_time->start_time }}" required>
                                <label class="" for="TextInput">Start Time</label>
                            </span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <span class="form-floating">
                            <input type="datetime-local" class="form-control" id="TextInput"  name="end_time"  value="{{$exam_time->end_time }}" required>
                                <label class="" for="TextInput"> End Time</label>
                            </span>
                        </div> 
                       
                        <div class="col-md-6 mb-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/admin/scholarships" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	// document.querySelector('form').addEventListener('submit', function (e) {
	//   const fileInput = document.querySelector('#imageInput');
	//   const maxSize = 300 * 1024; // 300KB in bytes
  
	//   if (fileInput.files.length > 0) {
	// 	const fileSize = fileInput.files[0].size;
  
	// 	if (fileSize > maxSize) {
	// 	  e.preventDefault(); // Prevent form submission
	// 	  alert('Image size exceeds the maximum allowed (300KB). Please choose a smaller image.');
	// 	}
	//   }
	// });
  </script>
@endsection