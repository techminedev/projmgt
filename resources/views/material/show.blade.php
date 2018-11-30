@extends('layouts.master')

@section('content')

<div class="card mb-3">

        <div class="card-header">
            <h2>Material</h2>
        </div>

        <div class="card-body">
          <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/material-detail') }}" ole="button" class="btn btn-primary">Materials</a></li>
                      <li class="list-inline-item"><a href="{{ url('/material-detail/create') }}" ole="button" class="btn btn-primary">New Material</a></li>
                  </ul>
                </div>
              </div>
            </div>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Code:</th>
                    <td>{{ $material->mat_code }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Name:</th>
                    <td>{{ $material->mat_name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Category:</th>
                    <td>{{ $material->mat_category }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Price:</th>
                    <td>{{ $material->mat_price }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Measurement Code:</th>
                    <td>{{ $material->measurement->uom_code }}</td>
                  </tr>
                  <tr>
                    <th scope="row">AcroName:</th>
                    <td>{{ $material->measurement->uom_acroname }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
</div>
@endsection
