@extends('layouts.master')

@section('content')

<div class="card mb-3">

        <div class="card-header">
            <h2>Barangay</h2>
        </div>

        <div class="card-body">
          <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/barangay') }}" role="button" class="btn btn-primary">Barangays</a></li>
                      <li class="list-inline-item"><a href="{{ url('/barangay/create') }}" role="button" class="btn btn-primary">New Barangay</a></li>
                  </ul>
                </div>
              </div>
            </div>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Code:</th>
                    <td>{{ $barangay->brgy_code }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Name:</th>
                    <td>{{ $barangay->brgy_name }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Municipality:</th>
                    <td>{{ $barangay->municipality->mun_name }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Province:</th>
                    <td>{{ $barangay->municipality->province->prov_name }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
</div>
@endsection
