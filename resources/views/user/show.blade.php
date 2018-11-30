@extends('layouts.master')

@section('content')

<div class="card mb-3">

        <div class="card-header">
            <h2>User Information</h2>
        </div>

        <div class="card-body">
          <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/users') }}" ole="button" class="btn btn-primary">Users</a></li>
                      <li class="list-inline-item"><a href="{{ url('/users/register') }}" ole="button" class="btn btn-primary">New User</a></li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                  </div>
                </div>
              </div>
            </div>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Name:</th>
                    <td>{{ $user->name }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Email:</th>
                    <td>{{ $user->email }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Role:</th>
                    <td>{{ $user->role->role }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
</div>
@endsection
