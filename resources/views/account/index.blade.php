@extends('layouts.master')

@section('content')

<div class="card mb-3">
	<div class="card-header">
        <h2>Account Details</h2>
        </div>

        <div class="card-body">

            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/account/create') }}" role="button" class="btn btn-primary">New Account</a></li>
                  </ul>
                </div>
              </div>
            </div>

        <table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Code</th>
		      <th scope="col">Title</th>
		      <th scope="col">Description</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($accounts as $account)
			    <tr>
			      <th scope="row">{{$account->id}}</th>
			      <td><a href="{{ url('/account/' . $account->id)}}" >{{$account->acc_code}}</a></td>
			      <td>{{$account->acc_title}}</td>
			      <td>{{$account->acc_description}}</td>
			      <td>
			      	<ul class="list-inline">
			      		<li class="list-inline-item"><a role="button" class="btn btn-primary" href="{{ url('/account/' . $account->id . '/edit') }}">Edit</a></li>
			      		<li class="list-inline-item">
			      			<form method="POST" action="{{ url('/account/' . $account->id) }}">
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
