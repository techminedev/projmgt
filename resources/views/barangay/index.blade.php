@extends('layouts.master')

@section('content')

<div class="card mb-3">
	<div class="card-header">
        <h2>Barangays</h2>
        </div>

        <div class="card-body">

            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/barangay/create') }}" role="button" class="btn btn-primary">New Barangay</a></li>
                  </ul>
                </div>
              </div>
            </div>

        <table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Code</th>
		      <th scope="col">Name</th>
		      <th scope="col">Municipality</th>
		      <th scope="col">Province</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($barangays as $barangay)
			    <tr>
			      <th scope="row">{{$barangay->id}}</th>
			      <td><a href="{{ url('/barangay/' . $barangay->id)}}" >{{$barangay->brgy_code}}</a></td>
			      <td>{{$barangay->brgy_name}}</td>
			      <td>{{$barangay->municipality->mun_name}}</td>
			      <td>{{$barangay->municipality->province->prov_name}}</td>
			      <td>
			      	<ul class="list-inline">
			      		<li class="list-inline-item"><a role="button" class="btn btn-primary" href="{{ url('/barangay/' . $barangay->id . '/edit') }}">Edit</a></li>
			      		<li class="list-inline-item">
			      			<form method="POST" action="{{ url('/barangay/' . $barangay->id) }}">
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
