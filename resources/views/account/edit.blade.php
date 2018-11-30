@extends('layouts.master')

@section('content')

        <h2>Edit Account</h2>
        @include('errors.errors')
        <form method="POST" action="{{url('/account/' . $account->id)}}">
            @method('patch')
            @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" id="" name="user_id" value="{{ Auth::id() }}">
              </div>
              <div class="form-group">
                <label for="acc_code">Code</label>
                <input type="text" class="form-control" id="" value="{{$account->acc_code}}" name="acc_code" required>
              </div>
              <div class="form-group">
                <label for="acc_title">Title</label>
                <input type="text" class="form-control" id="" value="{{$account->acc_title}}" name="acc_title" required>
              </div>
              <div class="form-group">
                <label for="acc_description">Description</label>
                <input type="text" class="form-control" id="" value="{{$account->acc_description}}" name="acc_description" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
        </form>

@endsection
