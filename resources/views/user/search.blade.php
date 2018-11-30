@extends('layouts.master')

@section('content')

<div class="card mb-3">

        <div class="card-header">
            <h2>Search User</h2>
        </div>

        <div class="card-body">

            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">

                <div class="col-sm-12 col-md-6">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/users/register') }}" ole="button" class="btn btn-primary">New User</a></li>
                  </ul>
                </div>

                <div class="col-sm-12 col-md-6">

                  @include('user.searchform')

                </div>

              </div>
            </div>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($users) != 0)
          	       @foreach($users as $user)
                    <tr>
                      <th scope="row"><a href="{{ url('/users/' . $user->id) }}">{{ $user->name}}</a></th>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->role->role }}</td>
                      <td>
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <form method="POST" action="">
                            @method('delete')
                            @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </li>
                        </ul>
                      
                      </td>
                    </tr>
                    @endforeach
                    @else
                      <tr>
                        <td width="100% ">
                        <h1 class="text-center">No User Found</h1>
                        </td>
                      </tr>
                    @endif
                </tbody>
              </table>
        </div>
</div>
@endsection
