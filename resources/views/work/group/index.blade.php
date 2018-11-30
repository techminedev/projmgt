@extends('layouts.master')

@section('content')

<div class="card mb-3">

	<div class="card-header">
        <h2>Measurements</h2>
        </div>

        <div class="card-body">

            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/measurement/create') }}" role="button" class="btn btn-primary">New Measurement</a></li>
                  </ul>
                </div>
              </div>
            </div>

        <table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Code</th>
		      <th scope="col">Acroname</th>
		      <th scope="col">Description</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($measurements as $measurement)
			    <tr>
			      <th scope="row">{{$measurement->id}}</th>
			      <td><a href="{{ url('/measurement/' . $measurement->id)}}" >{{$measurement->uom_code}}</a></td>
			      <td>{{$measurement->uom_acroname}}</td>
			      <td>{{$measurement->uom_description}}</td>
			      <td>
			      	<ul class="list-inline">
			      		<li class="list-inline-item"><a role="button" class="btn btn-primary" href="{{ url('/measurement/' . $measurement->id . '/edit') }}">Edit</a></li>
			      		<li class="list-inline-item">
			      			<form method="POST" action="{{ url('/measurement/' . $measurement->id) }}">
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
        </div>
</div>
</div>
@endsection
