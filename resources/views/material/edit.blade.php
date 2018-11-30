@extends('layouts.master')

@section('content')

        <h2>Edit Material</h2>
        @include('errors.errors')
        <form method="POST" action="{{url('/material-detail/' . $material->id)}}">
            @method('patch')
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
              <div class="form-group">
                <label for="mat_code">Code</label>
                <input type="text" class="form-control" id="" value="{{$material->mat_code}}" name="mat_code" required>
              </div>
              <div class="form-group">
                <label for="uom_acroname">Name</label>
                <input type="text" class="form-control" id="" value="{{$material->mat_name}}" name="mat_name" required>
              </div>
              <div class="form-group">
                <label for="uom_description">Category</label>
                <input type="text" class="form-control" id="" value="{{$material->mat_category}}" name="mat_category" required>
              </div>
              <div class="form-group">
                <label for="uom_description">Price</label>
                <input type="text" class="form-control" id="" value="{{$material->mat_price}}" name="mat_price" required>
              </div>
              <div class="form-group">
                <label for="measurement_id">Measurement Code</label>
                <select class="form-control" id="exampleFormControlSelect1" name="measurement_id">
                  @foreach($measurements as $measurement)
                  <option value="{{ $measurement->id }}"  {{ $measurement->id == $material->measurement_id ? "selected" : '' }}>{{ $measurement->uom_code }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>


        </form>

@endsection
