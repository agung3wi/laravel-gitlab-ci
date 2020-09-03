@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Customer</th>
                            <th>No Telp</th>
                        </tr>
                        @foreach($customerList as $customer)
                        <tr>
                            <td>{{ $customer->customer_name }}</td>
                            <td>{{ $customer->customer_phone }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection