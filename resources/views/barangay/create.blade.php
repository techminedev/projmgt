@extends('layouts.master')

@section('content')

        <h2>Create Barangay</h2>
        @include('errors.errors')
        <form method="POST" action="{{url('/barangay/store')}}">
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
              <div class="form-group">
                <label for="brgy_code">Code</label>
                <input type="text" class="form-control" id="" name="brgy_code" required>
              </div>
              <div class="form-group">
                <label for="brgy_name">Name</label>
                <input type="text" class="form-control" id="" name="brgy_name" required>
              </div>
              <div class="form-group">
                <label for="municipality_id">Municipality</label>
                <select class="form-control" id="exampleFormControlSelect1" name="municipality_id">
                  @foreach($municipalities as $municipality)
                  <option value="{{ $municipality->id }}">{{ $municipality->mun_name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>


        </form>

@endsection
