@extends('layouts.main')

@section('container')
    {{-- <div class="container card login-form">
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
    </div> --}}
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5 login-card mx-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1>Welcome Back!</h1>
                                </div>
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (session()->has('LoginError'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('LoginError') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <form action="authenticate" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email"
                                            class="form-control  @error('email') is-invalid @enderror" id="email" required
                                            value="{{ old('email') }}" />
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            required />
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="w-100 btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/register">Create an Account!</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
