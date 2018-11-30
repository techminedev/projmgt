@extends('layouts.master')

@section('content')

        <h2>Create Company Business Partners</h2>
        @include('errors.errors')
      	<form method="POST" action="{{url('/business-partner/store')}}">
	      	@csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
			  <div class="form-group">
			    <label for="supplier_name">Supplier Name</label>
			    <input type="text" class="form-control" id="" name="supplier_name" required>
			  </div>
			  <div class="form-group">
			    <label for="supplier_address">Supplier Address</label>
			    <input type="text" class="form-control" id="" name="supplier_address" required>
			  </div>
			  <div class="form-group">
			    <label for="supplier_bank_account_name">Supplier Account Name</label>
			    <input type="text" class="form-control" id="" name="supplier_bank_account_name" required>
			  </div>
			  <div class="form-group">
			    <label for="supplier_bank_no">Supplier Bank Number</label>
			    <input type="text" class="form-control" id="" name="supplier_bank_no" required>
			  </div>
			  <div class="form-group">
			    <label for="supplier_bank_branch">Supplier Bank Branch</label>
			    <input type="text" class="form-control" id="" name="supplier_bank_branch" required>
			  </div>
			  <div class="form-group">
  				<button type="submit" class="btn btn-primary">Create</button>
			  </div>


		</form>

@endsection
