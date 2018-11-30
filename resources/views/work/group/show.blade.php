@extends('layouts.master')

@section('content')

<div class="card mb-3">

        <div class="card-header">
            <h2>Measurement</h2>
        </div>

        <div class="card-body">
          <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="{{ url('/measurement') }}" role="button" class="btn btn-primary">Measurements</a></li>
                      <li class="list-inline-item"><a href="{{ url('/measurement/create') }}" role="button" class="btn btn-primary">New Measurement</a></li>
                  </ul>
                </div>
              </div>
            </div>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Code:</th>
                    <td>{{ $measurement->uom_code }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Acroname:</th>
                    <td>{{ $measurement->uom_acroname }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Description:</th>
                    <td>{{ $measurement->uom_description }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
</div>
@endsection
