@extends('layouts.master')

@section('content')

        <h2>Create Materials</h2>
        @include('errors.errors')
        <form method="POST" action="{{url('/material-detail/store')}}">
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
              <div class="form-group">
                <label for="mat_code">Code</label>
                <input type="text" class="form-control" id="" name="mat_code" required>
              </div>
              <div class="form-group">
                <label for="mat_name">Name</label>
                <input type="text" class="form-control" id="" name="mat_name" required>
              </div>
              <div class="form-group">
                <label for="mat_category">Category</label>
                <input type="text" class="form-control" id="" name="mat_category" required>
              </div>
              <div class="form-group">
                <label for="mat_price">Price</label>
                <input type="text" class="form-control" id="" name="mat_price" required>
              </div>
              <div class="form-group">
                <label for="measurement_id">Measurement Code</label>
                <select class="form-control" id="exampleFormControlSelect1" name="measurement_id">
                  @foreach($measurements as $measurement)
                  <option value="{{ $measurement->id }}">{{ $measurement->uom_code }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>


        </form>

@endsection
