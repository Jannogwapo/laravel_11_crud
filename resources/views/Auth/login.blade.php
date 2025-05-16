@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card login-card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Welcome Back</h2>
                    
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   placeholder="Enter your email"
                                   value="{{ old('email') }}"
                                   autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password" 
                                   placeholder="Enter your password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                                Remember me
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Sign In
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <p class="mb-0">Don't have an account? 
                            <a href="{{ route('register') }}" class="text-primary">Register here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    body {
        background-color: #f8f9fa;
    }
    .login-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .card-body {
        padding: 2.5rem;
    }
    h2 {
        color: #333;
        font-weight: 600;
    }
    .form-label {
        color: #555;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }
    .form-control {
        padding: 0.75rem 1rem;
        border-radius: 8px;
        border: 1px solid #ddd;
        transition: border-color 0.2s ease;
    }
    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
    }
    .btn-primary {
        padding: 0.75rem;
        font-weight: 500;
        border-radius: 8px;
        background-color: #0d6efd;
        border: none;
        transition: background-color 0.2s ease;
    }
    .btn-primary:hover {
        background-color: #0b5ed7;
    }
    .text-primary {
        color: #0d6efd !important;
        text-decoration: none;
        font-weight: 500;
    }
    .text-primary:hover {
        text-decoration: underline;
    }
    .invalid-feedback {
        font-size: 0.875rem;
    }
    .alert {
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }
    .form-check-input {
        border-radius: 4px;
        border: 1px solid #ddd;
    }
    .form-check-input:checked {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
    .form-check-label {
        color: #555;
        font-size: 0.95rem;
    }
</style>
@endpush
@endsection