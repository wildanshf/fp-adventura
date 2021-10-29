@extends('layouts.main')

@section('container')
    <div class="card shadow container login-card my-4" style="padding: 20px; border-radius: 10px;">
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required
                    value="{{ old('name') }}" />
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    required value="{{ old('email') }}" />
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror required"
                    id="password" />
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                    required value="{{ old('phone') }}" />
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
                @error('gender')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth">
            </div>
            <div class="ms-auto">
                <button type="submit" class="w-100 btn btn-primary mb-3">
                    Register
                </button>
            </div>
        </form>
    </div>
@endsection
