@extends('layouts.main')

@section('container')
    <div class="container my-3">
        <h1 style="text-align: center">Transaction Details</h1>
    </div>
    <div class="card transaction-details-card mx-auto my-5">
        <div class="row d-grid gap-2 d-md-flex justify-content-md-end">
            <div class="col-6">
                <h1>{{ $item->travel_package->title }}</h1>
                <h2>{{ $item->travel_package->tripType }}</h2>
            </div>
            <div class="col-3 ms-auto">
                <img src="{{ url('frontend/images/logo-adventura-black.png') }}" alt=""
                    style="padding-top: 20px; max-height: 100px" />
            </div>
        </div>
        <table class="table table-bordered mt-2">
            <tr>
                <th>Pembeli</th>
                <td>{{ $item->user->name }}</td>
            </tr>
            <tr>
                <th>Total Transaksi</th>
                <td>{{ $item->transaction_total }}</td>
            </tr>
            <tr>
                <th>Status Transaksi</th>
                <td>{{ $item->transaction_status }}</td>
            </tr>
            <tr>
                <th>Pembelian</th>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                        </tr>
                        @foreach ($item->details as $detail)
                            <tr>
                                <td>{{ $detail->username }}</td>
                                <td>{{ $detail->gender }}</td>
                                <td>{{ $detail->date_birth }}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        </table>
    </div>
@endsection
