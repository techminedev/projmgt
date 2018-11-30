@extends('layouts.master')

@section('content')
		
		@include('billings.businesspartner.breadcrumbs')

        <h2>Edit Company Business Partners</h2>
        @include('errors.errors')
      	<form method="POST" action="{{ url('/business-partner/' . $business->id) }}">
      		@method('patch')
	      	@csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Supplier Name</label>
			    <input type="text" class="form-control" id="" name="supplier_name" value="{{ $business->supplier_name }}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Supplier Address</label>
			    <input type="text" class="form-control" id="" name="supplier_address" value="{{ $business->supplier_address }}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Supplier Account Name</label>
			    <input type="text" class="form-control" id="" name="supplier_bank_account_name" value="{{ $business->supplier_bank_account_name }}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Supplier Bank Number</label>
			    <input type="text" class="form-control" id="" name="supplier_bank_no" value="{{ $business->supplier_bank_no }}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Supplier Bank Branch</label>
			    <input type="text" class="form-control" id="" name="supplier_bank_branch" value="{{ $business->supplier_bank_branch }}" required>
			  </div>
			  <div class="form-group">
  				<button type="submit" class="btn btn-primary">Update</button>
			  </div>


		</form>

@endsection
