@extends('layouts.master')

@section('content')

<div class="card mb-3">

        <div class="card-header">
            <h2>Business Partner Information</h2>
        </div>

        <div class="card-body">
          <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="list-inline">
                        <li class="list-inline-item"><a href="{{ url('/business-partner/create') }}" ole="button" class="btn btn-primary">New Business Partner</a></li>
                    </ul>
                </div>
              </div>
            </div>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Supplier Name:</th>
                    <td>{{ $business->supplier_name }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Supplier Address:</th>
                    <td>{{ $business->supplier_address }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Supplier Account Name:</th>
                    <td>{{ $business->supplier_bank_account_name }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Supplier Bank Number:</th>
                    <td>{{ $business->supplier_bank_no }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Supplier Bank Branch:</th>
                    <td>{{ $business->supplier_bank_branch }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
</div>
@endsection
