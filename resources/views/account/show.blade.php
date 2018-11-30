@extends('layouts.master')

@section('content')

<div class="card mb-3">

        <div class="card-header">
            <h2>Account Detail</h2>
        </div>

        <div class="card-body">
          <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/account') }}" ole="button" class="btn btn-primary">Accounts</a></li>
                      <li class="list-inline-item"><a href="{{ url('/account/create') }}" ole="button" class="btn btn-primary">New Account</a></li>
                  </ul>
                </div>
              </div>
            </div>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Code:</th>
                    <td>{{ $account->acc_code }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Acroname:</th>
                    <td>{{ $account->acc_title }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Description:</th>
                    <td>{{ $account->acc_description }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
</div>
@endsection
