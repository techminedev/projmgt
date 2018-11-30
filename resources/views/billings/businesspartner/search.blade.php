@extends('layouts.master')

@section('content')

	<div class="card-header">
        <h2>Search Business Partner</h2>
        </div>

        <div class="card-body">

            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/business-partner/create') }}" ole="button" class="btn btn-primary">New Business Partner</a></li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div id="dataTable_filter" class="dataTables_filter">
                  	<form method="POST" action="">
                  	<label>
                  		Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                  	</label>
                   </form>
                  </div>
                </div>
              </div>
            </div>

        <table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Supplier Name</th>
		      <th scope="col">Address</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($businesspartners as $partners)
			    <tr>
			      <th scope="row">{{$partners->id}}</th>
			      <td><a href="{{ url('/business-partner/' . $partners->id)}}" >{{$partners->supplier_name}}</a></td>
			      <td>{{$partners->supplier_address}}</td>
			      <td>
			      	<ul class="list-inline">
			      		<li class="list-inline-item"><a role="button" class="btn btn-primary" href="{{ url('/business-partner/' . $partners->id . '/edit') }}">Edit</a></li>
			      		<li class="list-inline-item">
			      			<form method="POST" action="{{ url('/business-partner/' . $partners->id) }}">
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
@endsection
