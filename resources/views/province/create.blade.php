@extends('layouts.master')

@section('content')

        <h2>Create Province</h2>
        @include('errors.errors')
        <form method="POST" action="{{url('/province/store')}}">
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
              <div class="form-group">
                <label for="prov_code">Code</label>
                <input type="text" class="form-control" id="" name="prov_code" required>
              </div>
              <div class="form-group">
                <label for="prov_name">Name</label>
                <input type="text" class="form-control" id="" name="prov_name" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>


        </form>

@endsection
