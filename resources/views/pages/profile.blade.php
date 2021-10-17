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
                        <h2>{{ auth()->user()->phone }}</h2>
                        <h3>Mobile Phone</h3>
                    </div>
                </div>
                <div class="row profile-details">
                    <div class="col-1 my-auto">
                        <img src="frontend/images/icon-location.svg" alt="icon" />
                    </div>
                    <div class="col-11">
                        <h2>{{ auth()->user()->address }}</h2>
                        <h3>Address</h3>
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
@endsection
