@extends('layouts.master')

@section('content')

        <h2>Edit Measurements</h2>
        @include('errors.errors')
        <form method="POST" action="{{url('/measurement/' . $measurement->id)}}">
            @method('patch')
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
              <div class="form-group">
                <label for="uom_code">Code</label>
                <input type="text" class="form-control" id="" value="{{$measurement->uom_code}}" name="uom_code" required>
              </div>
              <div class="form-group">
                <label for="uom_acroname">AcroName</label>
                <input type="text" class="form-control" id="" value="{{$measurement->uom_acroname}}" name="uom_acroname" required>
              </div>
              <div class="form-group">
                <label for="uom_description">Description</label>
                <input type="text" class="form-control" id="" value="{{$measurement->uom_description}}" name="uom_description" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>


        </form>

@endsection
