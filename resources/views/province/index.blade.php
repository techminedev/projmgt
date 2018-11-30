@extends('layouts.master')

@section('content')

<div class="card mb-3">

	<div class="card-header">
        <h2>Provinces</h2>
        </div>

        <div class="card-body">

            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/province/create') }}" role="button" class="btn btn-primary">New Province</a></li>
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
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($provinces as $province)
			    <tr>
			      <th scope="row">{{$province->id}}</th>
			      <td><a href="{{ url('/province/' . $province->id)}}" >{{$province->prov_code}}</a></td>
			      <td>{{$province->prov_name}}</td>
			      <td>
			      	<ul class="list-inline">
			      		<li class="list-inline-item"><a role="button" class="btn btn-primary" href="{{ url('/province/' . $province->id . '/edit') }}">Edit</a></li>
			      		<li class="list-inline-item">
			      			<form method="POST" action="{{ url('/province/' . $province->id) }}">
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
