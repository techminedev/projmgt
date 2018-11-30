@extends('layouts.master')

@section('content')

        <h2>Edit Project Listing</h2>
        @include('errors.errors')
      	<form method="POST" action="{{url('/project-listing/' . $project->id)}}">
      		@method('patch')
	      	@csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Project Name</label>
			    <input type="text" class="form-control" id="" name="project_name" value="{{$project->project_name}}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Project Location</label>
			    <input type="text" class="form-control" id="" name="project_location" value="{{$project->project_location}}" required>
			  </div>
			  <div class="form-group">
  				<button type="submit" class="btn btn-primary">Update</button>
			  </div>

		</form>

@endsection
