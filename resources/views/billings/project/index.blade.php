@extends('layouts.master')

@section('content')

<div class="card mb-3">

	<div class="card-header">
        <h2>Company Business Partner</h2>
        <a role="button" href="{{url('/project-listing/create')}}" class="btn btn-primary">Add Project Listings</a>
        <table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Project Name</th>
		      <th scope="col">Project Location</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($projects as $project )
			    <tr>
			      <th scope="row">{{$project->id}}</th>
			      <td><a href="{{ url('/project-listing/' . $project->id) }}">{{$project->project_name}}</a></td>
			      <td>{{$project->project_location}}</td>
			      <td>
			      	<ul class="list-inline">
			      		<li class="list-inline-item"><a role="button" class="btn btn-primary" href="{{ url('/project-listing/' . $project->id)}}">Edit</a></li>
			      		<li class="list-inline-item">
			      			<form method="POST" action="{{ url('/project-listing/' . $project->id)}}">
				      		@method('delete')
				      		@csrf
	  						<button type="submit" class="btn btn-danger">Delete</button>
  						</form>
  						</li>
			      	</ul>
			      
			      </td>
			    </tr>
			@endforeach
		  </tbody>
		</table>
		{{ $projects->links() }}

        </div>
</div>
</div>
@endsection
