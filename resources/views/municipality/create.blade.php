@extends('layouts.master')

@section('content')

        <h2>Create Municipality</h2>
        @include('errors.errors')
        <form method="POST" action="{{url('/municipality/store')}}">
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
              <div class="form-group">
                <label for="mun_code">Code</label>
                <input type="text" class="form-control" id="" name="mun_code" required>
              </div>
              <div class="form-group">
                <label for="mun_name">Name</label>
                <input type="text" class="form-control" id="" name="mun_name" required>
              </div>
              <div class="form-group">
                <label for="province_id">Province</label>
                <select class="form-control" id="exampleFormControlSelect1" name="province_id">
                  @foreach($provinces as $province)
                  <option value="{{ $province->id }}">{{ $province->prov_name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>


        </form>

@endsection
