@extends('layouts.main')

@section('container')
    <div class="container card profile-card">
        <div class="row">
            <div class="col-8 profile-info">
                <div class="row">
                    <h1>Personal Info</h1>
                </div>
                <div class="row profile-details">
                    <div class="col-1 my-auto">
                        <img src="frontend/images/icon-user.svg" alt="icon" />
                    </div>
                    <div class="col-11">
                        <h2>{{ auth()->user()->name }}</h2>
                        <h3>Username</h3>
                    </div>
                </div>
                <div class="row profile-details">
                    <div class="col-1 my-auto">
                        <img src="frontend/images/icon-mail.svg" alt="icon" />
                    </div>
                    <div class="col-11">
                        <h2>{{ auth()->user()->email }}</h2>
                        <h3>Email</h3>
                    </div>
                </div>
                <div class="row profile-details">
                    <div class="col-1 my-auto">
                        <img src="frontend/images/icon-phone.svg" alt="icon" />
                    </div>
                    <div class="col-11">
                        <h2>{{ auth()->user()->gender }}</h2>
                        <h3>Gender</h3>
                    </div>
                </div>
                <div class="row profile-details">
                    <div class="col-1 my-auto">
                        <img src="frontend/images/icon-location.svg" alt="icon" />
                    </div>
                    <div class="col-11">
                        <h2>{{ Carbon\Carbon::create(auth()->user()->date_of_birth)->format('n F Y') }}</h2>
                        <h3>Birth Date</h3>
                    </div>
                </div>
            </div>
            <div class="col-4 profile-photo my-auto">
                <div class="row mx-auto">
                    <img src="frontend/images/photo-profile.png" alt="photo profile" />
                </div>
                <div class="row mx-auto">
                    <button class="btn btn-primary btn-profile mx-auto">
                        Change Photo Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 mx-auto user-transaction-card" style="max-width: 1000px;">
        <div class="mx-auto my-3">
            <h1>Transaction History</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Travel</th>
                        <th>Trip Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->travel_package->title }}</td>
                            <td>{{ Carbon\Carbon::create($item->travel_package->tripDate)->format('n F Y') }}</td>
                            <td>{{ $item->transaction_total }}</td>
                            <td>{{ $item->transaction_status }}</td>
                            <td>
                                <a href="{{ route('transaction-detail', $item->id) }}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
