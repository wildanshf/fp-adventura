@extends('layouts.main')

@section('container')
    <div class="container login-form">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('LoginError'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('LoginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1>Login</h1>
        <form action="authenticate" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                    required value="{{ old('email') }}" />
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required />
            </div>
            <div class="mb-3">
                <button type="submit" class="w-100 btn btn-primary">
                    Submit
                </button>
            </div>
            <div class="row">
                <p>Don't have an account? <a href="/register">Register Here</a></p>
            </div>
        </form>
    </div>
@endsection
