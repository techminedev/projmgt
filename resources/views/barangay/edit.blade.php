@extends('layouts.master')

@section('content')

        <h2>Edit Barangay</h2>
        @include('errors.errors')
        <form method="POST" action="{{url('/barangay/' . $barangay->id)}}">
            @method('patch')
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
              <div class="form-group">
                <label for="brgy_code">Code</label>
                <input type="text" class="form-control" id="" value="{{ $barangay->brgy_code}}" name="brgy_code" required>
              </div>
              <div class="form-group">
                <label for="brgy_name">Name</label>
                <input type="text" class="form-control" id="" value="{{ $barangay->brgy_name}}" name="brgy_name" required>
              </div>
              <div class="form-group">
                <label for="municipality_id">Municipality</label>
                <select class="form-control" id="exampleFormControlSelect1" name="municipality_id">
                  @foreach($municipalities as $municipality)
                  <option value="{{ $municipality->id }}" {{ $municipality->id === $barangay->municipality_id ? "selected" : '' }}>{{ $municipality->mun_name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>


        </form>

@endsection
